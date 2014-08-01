/*
combined files : 

kg/spike-Timeline/2.0.0/index

*/

/** 
* @fileOverview 天猫双十一秒杀时间轴控制器(固定间隔时间 和 自定义 时间数组 2套生成时间轴方式，支持 时/分 时间高度灵活配置)   
* @module spike-Timeline 
* @extends  KISSY.Base
* @creator  黄甲(水木年华double)<huangjia2015@gmail.com>
* @depends  ks-core
* @version  2.0.0 
* @update 2014-01-06  优化懒加载机制-textarea
**/
 
KISSY.add('kg/spike-Timeline/2.0.0/index',function(S, RealTime){
       var Event = S.Event,
           DOM = S.DOM;
           
        // 常量 1       
        var VIEW_INDEX = 'data-index',
            BLOCK_DATA_TIME = 'data-time',
            BLOCK_TIME_LENGTH = 'data-timelength';

        // 常量 2       
        var DAY_HOURS = 24,
            ONE_SECONDS = 1000,
            ONE_MINUTES = 1000*60,
            ONE_HOURS = 1000*60*60,
            ONE_DAY = 1000*60*60*24;

        var REALTIME,
            TEMPLATE = '<a class="j_timeBlock"><span class="hours"></span><span class="state"></span></a>',
            TIMES_Ary = [];      
    

        // 默认配置
        var defCfg = {

            // 服务器初始化时间 默认 毫秒数、支持 标准时间字符串如：'2013-11-20 17:30:32'
            serviceTime: null,

            // 服务器 时间同步 url接口
            url: '',
            
            // 异步 时间同步 是否是jsonp  --默认
            isJsonp: true,
            
            // 异步更新时间配置，最低间隔 需要 >= 1分钟 -- 默认1小时
            ajaxUpMinutes: 60,          

            // 时间轴 timeTemplate 模板
            timeTemplate: '',

            // 起止时间具体配置 -- 字符串格式，比如： '2013-11-26 15:32:08'  
            startTime: '',  
            endTime: '',

            // 无效时间 是否 隐藏 时间轴 和 活动区块
            isInvalidTimeHide: true,

            // 是否自定义 不规则 时间段 -- 若此处开启 则需要 配置 下列 customTime 时间点数组
            isCustomTimePeriod: false,

            // 自定义时间点 数组, 规范的 时分字符串 ---  支持 时间大小顺序 随机排列, 时分字符串形式 支持 比如 "00", "02", "03:11", "0:2"等
            customTime: [], 

            // 固定间隔时间 -- 支持 时分字符串时间、毫秒数 配置
            timeLength: null, 

            // 浏览其他区块 停留 时间，然后自动返回 当前活动区块 --  分钟
            viewResidenceTime: 2,

            // 过去时间段 样式
            doneCls: 'doneCls',

            // 当前时间段 样式
            currCls: 'currCls',

            // 未来时间段 样式
            futrueCls: 'futrueCls',

            // 过去时间段 是否 可点击 查看
            isPastView: true,

            // 过去时间段 点击查看 样式
            clickPastTimeBlockCls: 'clickPastTimeBlock',

            // 未来时间段 是否 可查看
            isFutureView: true, 

            // 未来时间段 点击查看 样式
            clickFutureTimeBlock: 'clickFutureTimeBlock',

            // 时间模块 css钩子
            timeBlockCls: '.j_timeBlock',

            // 时分秒时间 容器 css钩子
            hoursContainerCls: '.hours',

            // 状态文本 容器 css钩子
            stateTextCls: '.state',

            // 过去时间段 文本 设置 -- 内置模板添加文本无效
            pastStateText: '',

            // 当前时间段 文本 设置
            currtStateText: '开抢',

            // 未来时间段 文本 设置
            futureStateText: '即将开抢',
            
            // 是否开启 自动ui更新
            isAutoUpdateUi: true,

            // ui更新时间 秒 -- 默认1秒
            updateUiSeconds: 1,

            // 活动展现内容区块 容器 id
            merchContainer: '#J_secondContent',

            // 活动展现内容区块 钩子
            merchBlockCls: '.j_ul',

            // 是否执行懒加载 textarea中的 js
            execScript: true,

            // 懒加载 textarea 钩子
            dataLazyloadCls: 'data-lazyload-cls'    
        };  


        function SpikeTimeline(container, config){
            var _self = this;               

            _self.container = S.get(container);
            _self.config = S.merge(defCfg, config);

            if( !(_self instanceof SpikeTimeline) ){
                return new SpikeTimeline(container, _self.config);
            }

            SpikeTimeline.superclass.constructor.call(_self, _self.config);

            _self._init();
        }

        // 支持的事件
        SpikeTimeline.events = [
            /**  
            * 过去时间段 时间触发 -- 
            * @event passSpikeChange  
            * @param {event} el对象
            * @param {Array} el.elTarget 时间标签dom元素
            */
            'passSpikeChange',
            
            /**  
            * 当前时间段 时间触发
            * @event currSpikeChange  
            * @param {event} el对象
            * @param {Array} el.elTarget 时间标签dom元素
            * @param {Array} el.timeStr  当前时间标签-字符串   比如：12:00  
            */
            'currSpikeChange',

            /**  
            * 未来时间段 时间触发
            * @event futureSpikeChange  
            * @param {event} el对象
            * @param {Array} el.elTarget 时间标签dom元素
            */
            'futureSpikeChange',   

            /**  
            * 时间标签click 事件触发
            * @event spikeTimeClick  
            * @param {event} el对象
            * @param {Array} el.elTarget 时间标签dom元素
            * @param {Array} el.timeStr  当前时间标签-字符串   比如：10:00 
            */
            'spikeTimeClick'

        ];   

        S.extend(SpikeTimeline, S.Base);
        S.augment(SpikeTimeline, {

                // 控件 初始化
                _init: function(){
                    var _self = this;    
                       
                    _self._argumentsInit();
													
                    _self._hideAllAcitve(); 
					
                    _self._blockStateRender(); 

                    _self._eventRender();
					
					if(_self.get('isAutoUpdateUi') ){
                        _self._startUpdateUi(); 
                    }else{
                        _self.stopAutoUpdateUi();
                    }                                   
                },
				
                // 全局变量初始化
                _argumentsInit: function(){
                    var _self = this;

                    REALTIME = new RealTime({                        
                        serviceTime: _self.get('serviceTime'),
                        url: _self.get('url'),
                        isJsonp: _self.get('isJsonp'),
                        ajaxUpMinutes: _self.get('ajaxUpMinutes'),
                        isAutoUpdate: _self.get('isAutoUpdate')
                    });
					
					// 整个 开始日期 毫秒数	
					_self.startDateMillisecond = REALTIME.getDateParse(_self.get('startTime'));
					
					// 固定的时间 间隔毫秒数
					_self.timeLengthSecondes = REALTIME.getMillisecond(_self.get('timeLength'));
	
					// 自定义模板
                    if(_self.get('timeTemplate')){
                        TEMPLATE = _self.get('timeTemplate');
                    }else{
                        S.use('kg/spike-Timeline/2.0.0/spikectrl.css');
                    }

                    _self._updateMainTime();

                    _self._getNewYMD();

                    // 各个时间段 秒杀 区块儿 活动内容区 集合 
                    if(_self.get('merchBlockCls') && S.get(_self.get('merchContainer')) ){
                        _self.aBlocks = S.query( _self.get('merchBlockCls'), S.get(_self.get('merchContainer')) );  
                    }else{
                        _self.aBlocks = null;
                    }                                     
                },  
				
				// 更新 实时时间 年月日
                _getNewYMD: function(){
                    var _self = this;
                    
                    _self.dataYMD = REALTIME.getTimeYMDstr();        
                },
				
                // 初始化 时间 和 状态/文字
                _blockStateRender: function(){
                    var _self = this;

                    if(!_self.isValidDate()){
                        return;
                    }  

                    // 是否 自定义 不规则时间段 
                    if(_self.get('isCustomTimePeriod')) {
                        _self._renderSelfTimeBlock();
                    }else{
                        _self._calculateTimeLenth();
                    }
                   
                    _self._setStateText();
                },

                // 获取元素块儿 保存 -- 时间段 导航 集合
                _saveTimeBlock: function(){
                    var _self = this;

                    !_self.timeBlock && (_self.timeBlock = S.query(_self.get('timeBlockCls'), _self.container ));
                    S.one(_self.timeBlock[0]).addClass('mrg_lft155');
                },
                
                // 根据时间 配置数组 初始化 时间段 --- 自定义 不规则时间 时间轴生成
                _renderSelfTimeBlock: function(){
                    var _self = this, 
                        fragment = document.createDocumentFragment(),                      
                        tiems = REALTIME.sortHMtimeArray(_self.get('customTime')),
                        tiems = REALTIME.allStrHMtimeRenderFn(tiems),						
                        length = tiems.length;

                    if(!length || !TEMPLATE){
                        S.log('自定义时间数据或者模板 无效！');
                        return;
                    } 

                    for(var i= 0; i < length; i++) {
                        var curTimeStr = tiems[i],
							nextTimeStr = tiems[i+1], 
							nextDataHour = nextTimeStr ? nextTimeStr : ONE_DAY,	
							timeRange = REALTIME.getMillisecond(nextDataHour) - REALTIME.getMillisecond(curTimeStr),
                            dayTimeSeconds = _self.startDateMillisecond + timeRange;
						
						// 添加完整时间 毫秒数
						if(!i){
							TIMES_Ary.push(_self.startDateMillisecond); 
						}else{
							TIMES_Ary.push(dayTimeSeconds); 
						}

                        fragment.appendChild( _self._writeTimeDataText(i, curTimeStr, timeRange) );
                    };
					
					DOM.append(fragment, _self.container); 

                    _self._saveTimeBlock();  
                },
				
                // 根据固定间隔时间 初始化 时间段 -- 固定间隔时间--- 时间轴生成
                _calculateTimeLenth: function(){
                    var _self = this,
						fragment = document.createDocumentFragment(),					
						HMSstr = REALTIME.getAllHMSstr(_self.startDateMillisecond),
						startDateHMS_Millisecond = REALTIME.getMillisecond(HMSstr),
                        startDateHMstr = REALTIME.formatHMSstr(HMSstr);

                    if(!TEMPLATE){
                        S.log('自定义时间轴模板错误！');
                        return;
                    }     

                    for(var i = 0; i < 100; i++) {  
                        var timeRange = startDateHMS_Millisecond + i*_self.timeLengthSecondes,
                            timeText = timeRange ? REALTIME.getHMstr(timeRange) : startDateHMstr,                           
							renderText = REALTIME.allStrHMtimeRenderFn(timeText)[0],
                            dayTimeSeconds = _self.startDateMillisecond + timeRange - startDateHMS_Millisecond;

                        if(!renderText){
                            break;
                        }

                        // 添加完整时间 毫秒数
                        TIMES_Ary.push(dayTimeSeconds); 

                        fragment.appendChild( _self._writeTimeDataText(i, renderText, _self.timeLengthSecondes) );
                    };
		
                    DOM.append(fragment, _self.container);   

                    _self._saveTimeBlock();               
                }, 

                // 时间轴 标示值写入方法 ------ 展现文本小时分时间、时间段内长度标示、活动区块序号index 
                _writeTimeDataText: function(num, HMstr, timeLengthSecondes){
                    var _self = this,
						el = DOM.create(TEMPLATE),
                        hoursContainer = S.one(el).first(_self.get('hoursContainerCls'));

                    DOM.attr(el, VIEW_INDEX, num); 
                    DOM.attr(el, BLOCK_DATA_TIME, HMstr);
                    DOM.attr(el, BLOCK_TIME_LENGTH, timeLengthSecondes);
                    hoursContainer && hoursContainer.text(HMstr);
					
					return el;
                },
               
			    // 渲染 textarea 懒加载资源
				renderDataLazyLoad: function(el){
					var _self = this;

                    if(!el){
                        return;
                    }
					
                    var textareas_cls = S.get('.'+_self.get('dataLazyloadCls'), el);
						
                    textareas_cls && _self.loadAreaData(textareas_cls);			
				},		

                // 从 textarea 中加载数据
                loadAreaData: function (textarea) {
                    var _self = this,
                        html = textarea.value || '',
                        content = DOM.create('<div>');

                    // 采用隐藏 textarea 但不去除方式，去除会引发 Chrome 下错乱                  
                    textarea.style.width = 0;
                    textarea.style.height = 0;
                    textarea.style.display = 'none';
                    textarea.className = ''; // clear hook

                    // textarea 直接是 container 的儿子
                    textarea.parentNode.insertBefore(content, textarea);

                    DOM.html(content, html, _self.get('execScript') );
                },

                // 事件初始化
                _eventRender: function(){
                    var _self = this;

                    // 监控点击事件
                    Event.on(_self.get('timeBlockCls'), 'click', function(event){
                        _self.fire('spikeTimeClick', {"elTarget":this, "timeStr": DOM.attr(this, BLOCK_DATA_TIME)} );   
                        _self._timeClickIf(this);
                    });
                },

                // 根据状态--判断是否查看 相应活动区块 
                _timeClickIf: function(el){
                    var _self = this,
                        tgsContainer = el,
                        hasPastTime = DOM.hasClass(tgsContainer, _self.get('doneCls') ),
                        hasCurrTime = DOM.hasClass(tgsContainer, _self.get('currCls') ),
                        hasFutureTime = DOM.hasClass(tgsContainer, _self.get('futrueCls') );

                    // 过去是否可以查看    
                    if(_self.get('isPastView') && hasPastTime){                       
                        _self._showRangeTimeMeched(tgsContainer);
                        _self._clearAllClickCls();
                        DOM.addClass(el, _self.get('clickPastTimeBlockCls'));
                        _self._layzBackCurrView();
                    }    

                    // 即将开始 是否可以查看 
                    if(_self.get('isFutureView') && hasFutureTime){                        
                        _self._showRangeTimeMeched(tgsContainer);
                        _self._clearAllClickCls();
                        DOM.addClass(el, _self.get('clickFutureTimeBlock'));
                        _self._layzBackCurrView();
                    }

                    // 点击 当前查看     
                    if(hasCurrTime){
                        _self._clearAllClickCls();
                        _self._showRangeTimeMeched(tgsContainer);
                        _self.lazyBackTimeOut && clearTimeout(_self.lazyBackTimeOut);
                    }                      
                },

                // 点击 查看过去 或者 未来 活动视图后 延迟指定时间返回当前时间段面板
                _layzBackCurrView: function(){
                    var _self = this,
						time = _self.get('viewResidenceTime')*ONE_MINUTES;

                    // 定时重启 自动更新
                    _self.lazyBackTimeOut && clearTimeout(_self.lazyBackTimeOut);
                    _self.lazyBackTimeOut = setTimeout(backfn, time);

                    function backfn(){
                        // 显示 当前时间 活动
                        _self._showRangeTimeMeched(_self.currTimeBlock); 

                        // 清除click样式
                        _self._clearAllClickCls();
                    }
                },

                // 清除样式
                _clearClickBlockCls: function(j_cls, stateCls){
                    var _self = this,
                        pastBlocks = S.query( '.'+j_cls , _self.container);

                    S.each(pastBlocks, function(el){
                        DOM.removeClass(el, stateCls);
                    });  
                },  

                // 清除 所有 click样式
                _clearAllClickCls: function(){
                    var _self = this;

                    _self._clearClickBlockCls(_self.get('doneCls'), _self.get('clickPastTimeBlockCls') );
                    _self._clearClickBlockCls(_self.get('futrueCls'), _self.get('clickFutureTimeBlock') );
                },

                // 1、传入元素参数--判断显示指定时间段活动内容;
                _showRangeTimeMeched: function(el){
                    var _self = this,
                        showIndex = parseInt(DOM.attr(el, VIEW_INDEX), 10);

                    if(!_self.aBlocks){
                        return;
                    }    
                    
                    var elNode = _self.aBlocks[showIndex];

                    _self._hideAllAcitve();

                    if(!elNode){
                        return;
                    }

                    DOM.show(elNode);
                    _self.renderDataLazyLoad(elNode);  
                },

                // 隐藏所有秒杀 活动区块
                _hideAllAcitve: function(){
                    var _self = this;

                    _self.aBlocks && S.each(_self.aBlocks, function(em){                       
                        DOM.hide(em);                     
                    });
                },

                // 状态 文本 和 样式 -循环
                _setStateText: function(){
                    var _self = this;
                    
                    // 记录开始时间 _self.startTIME = S.now();

                    if(!_self.isValidDate()){                        
                        _self.allShowHideFn();
                        return;
                    } 

                    S.each(_self.timeBlock, function(el, index){
                        _self._renderStateAll(el, index);
                    });
                },

                // 隐藏 和 显示数据
                allShowHideFn: function(){
                    var _self = this;

                    if(_self.get('isInvalidTimeHide')){
                        _self.showHideFn( _self.timeBlock, false );
                        _self._hideAllAcitve(); 
                    }
                },

                // 设定 文本状态 方法
                _renderStateAll: function(el, index){
                    var _self = this,
						
						timeStr = DOM.attr(el, BLOCK_DATA_TIME),						
                        timeLengthSeconds = parseInt(DOM.attr(el, BLOCK_TIME_LENGTH), 10),
						curYMDstr = REALTIME.getTimeYMDstr(),
                        curDateStr = curYMDstr +' '+ timeStr,	
						
                        spikeTimeStart = REALTIME.getDateParse(curDateStr),						
                        spikeTimeEnd = REALTIME.offsetDateSeconds(curDateStr, timeLengthSeconds, '+'),
						
                        isLastBlock = (_self.timeBlock.length-1) === index,						
                        dayEndTimeSeconds = REALTIME.getDateParse(curYMDstr +' 23:59:59') + ONE_SECONDS;    

                    if(!el){
                        return;
                    }  
  
                    // 3段 判断法：除去 过去和现在，剩下将来； 是否 过去 时间 - 逻辑判断改为 结束终点
                    if(spikeTimeEnd < _self.mainTime){ 
                        _self._addPastState(el);

                    // 是否 当前 时间 段:  < 设定-1秒  && <= 设定+间隔- 1秒  vs // 不足24小时情况, 则停留最后 一个时间点上     
                    }else if( REALTIME.isInTimeRange(spikeTimeStart, _self.mainTime, spikeTimeEnd) || REALTIME.isInTimeRange(spikeTimeStart, _self.mainTime, dayEndTimeSeconds) && isLastBlock ){                       
                        _self._addCurrState(el);

                    // 是否 未来 时间  
                    }else{
                        _self._addFutureState(el);  
                        // isLastBlock && S.log((S.now()) - _self.startTIME)                  
                    }
                },

                // 添加过去样式
                _addPastState: function(el){
                    var _self = this,
                        donecls = _self.get('doneCls'),
                        hasPastTime = DOM.hasClass(el, donecls),                      
                        textContainer = S.one(el).first(_self.get('stateTextCls'));
                    
                    if(hasPastTime){
                        return;
                    }   

                    // 操作前 先 清空状态( 样式和文案 )
                    _self._clearCls(el);     

                    DOM.addClass(el, donecls);
                    DOM.text(textContainer, _self.get('pastStateText'));

                    // _self.fire('passSpikeChange', {"elTarget":el});  
                },

                // 添加当前样式
                _addCurrState: function(el){
                    var _self = this,
                        currcls = _self.get('currCls'),
                        hasCurrTime = DOM.hasClass(el, currcls),
                        textContainer = S.one(el).first(_self.get('stateTextCls'));
                    
                    if(hasCurrTime){
                        return;
                    }   

                    // 操作前 先 清空状态( 样式和文案 )
                    _self._clearCls(el);
                      
                    DOM.addClass(el, currcls);
                    DOM.text(textContainer, _self.get('currtStateText'));
                    
                    // 展现当前 秒杀内容
                    _self._showRangeTimeMeched(el);

                    // 存储目标
                    _self.currTimeBlock = el;    

                    _self.fire('currSpikeChange', {"elTarget":el, "timeStr": DOM.attr( el, BLOCK_DATA_TIME) });
                },

                // 添加即将秒杀样式
                _addFutureState: function(el){
                    var _self = this, 
                        futruecls = _self.get('futrueCls'),                       
                        hasFutureTime = DOM.hasClass(el, futruecls),
                        textContainer = S.one(el).first(_self.get('stateTextCls')); 
                    
                    if(hasFutureTime){
                        return;
                    }                      
                     
                    // 操作前 先 清空状态( 样式和文案 )
                    _self._clearCls(el);
                      
                    DOM.addClass(el, futruecls);
                    DOM.text(textContainer, _self.get('futureStateText'));

                    // _self.fire('futureSpikeChange', {"elTarget":el});
                },

                // 清空 样式 钩子 和 状态值
                _clearCls: function(el){
                    var _self = this,
                        textContainer = S.one(el).first(_self.get('stateTextCls'));

                    DOM.removeClass(el, _self.get('doneCls'));
                    DOM.removeClass(el, _self.get('currCls'));
                    DOM.removeClass(el, _self.get('futrueCls'));

                    if(textContainer){
                        DOM.text(textContainer, '');
                    }
                }, 

                // 更新主时间
                _updateMainTime: function(){
                    var _self = this;

                    _self.mainTime = REALTIME.getCurrTime();
                },

                // 判断日期 总区段 有效性
                isValidDate: function(){
                    var _self = this,
                        startTime = REALTIME.getDateParse(_self.get('startTime')),
                        endTime = REALTIME.getDateParse(_self.get('endTime')),
						isInTimeRange = REALTIME.isInTimeRange(startTime, _self.mainTime, endTime);
                    
					!isInTimeRange && S.log('时间有效性验证失败！');
					
                    return isInTimeRange;
                },  

                // 隐藏或者显示所有 时间 段区块儿
                showHideFn: function(ary, isShow, callBack){
                    var _self = this,
                        callBack = S.isFunction(callBack) ? callBack : null;

                    S.each(ary, function(em, index){   
                        if(isShow){
                            DOM.show(em);
                        }else{
                            DOM.hide(em);
                        } 

                        callBack && callBack.call(_self, em, index);                      
                    });
                },

                // 本地更新：时间、ui 方法
                _startUpdateUi: function(){
                    var _self = this,
                        updateTime = _self.get('updateUiSeconds') < 1 ? 1 : _self.get('updateUiSeconds'),
                        secondes = updateTime*ONE_SECONDS;

                    if(_self.autoUpdateIntvl){
                        return;
                    }

                    _self.autoUpdateIntvl = setInterval(autofn, secondes);                     

                    function autofn(){
                        _self._updateMainTime();

                        // S.log('时间对象获得时间：' + new Date(_self.mainTime) );
                        // S.log('js直接获取时间：' + new Date() );
                        // S.log('差距时间：' + (REALTIME.getServerLocalDiff())/ONE_MINUTES );

						// 更新 实时时间 年月日
						_self._getNewYMD();
					
                        // 调用 ui 更新方法
                        _self._setStateText();                          
                    }    
                },

                // 停止自动更新 -- 清除 时间、ui、ajax异步 更新 循环
                stopAutoUpdateUi: function(){
                    var _self = this;

                    // 清除 本地 ui 时间更新 循环
                    _self.autoUpdateIntvl && clearInterval(_self.autoUpdateIntvl);                   
                }
        });

    return SpikeTimeline; 

}, {'requires':['kg/real-time/1.0/index']});
