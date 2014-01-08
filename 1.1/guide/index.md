## 综述

SpikeTimeline 她是一个 时间轴与活动展现管理组件, 根据实时服务器时间改变时间段 状态(过去、现在、将来)，并展示时间点所对应的 展示区块(内置数据懒加载机制);

* 版本：1.1
* 更新日期：20140107
* 作者：水木年华double ```<huangjia2015@gmail.com>```
* demo：[http://gallery.kissyui.com/spike-Timeline/1.1/demo/index.php](http://gallery.kissyui.com/spike-Timeline/1.1/demo/index.php)


## 支持特性如下：

1. 时间轴生成方式 方便灵活, 支持 固定间隔时间计算生成时间轴 和 无规律 自定义 时间数组 生成;  
2. 灵活多样的 时间更新机制 --- 本地时间、时间差时间、服务器间隔性同步更新机制,精度小于1秒; 
3. 支持 字符串时间容错；
4. 高度灵活的时间参数配置，支持 毫秒数 和 日期字符串方式(详解配置表说明)，自定义时间数组 支持 时分字符串配置，灵活支持比如：("00", "02", "03:11", "0:2" ... 杂乱 无序的 字符串时间 配置);
5. 支持 跨天/月/年 天内 无限重复; 
6. 支持自定义模板等；
7. 升级优化懒加载机制，采用textarea方式 懒加载Dom元素;
8. 其他灵活配置 比如：各个 时间段 3种不同的状态下可配置是否可点击查看，以及点击样式等;



## 初始化组件 -- 快速配置

    S.use('gallery/spike-Timeline/1.1/index', function (S, SpikeTimeline) {

        var spike-Timeline = new SpikeTimeline({

        	// 起止时间 -- 字符串格式，比如： '2013-11-26 15:32:08'
    		startTime: '',  
			endTime: '',

			// 固定间隔时间(如：固定时间) -- 支持 时分字符串时间、毫秒数 配置
			timeLength: '1',

			// 服务器初始化时间 默认 毫秒数、支持 标准时间字符串如：'2013-11-20 17:30:32'
			serviceTime: null,

			url: ''
        });
    });



## 必读说明！！！ ##

1. 数据懒加载采用textarea方式，其钩子为：
 `<textarea class="data-lazyload-cls" style="width:0; height:0; display:none;"> 需要懒加载的内容... </textarea>` 
 
     ps：图片懒加载 想当前时间下图片也不展示，请参加 [kissy datalazyload](http://gallery.kissyui.com/datalazyload/1.0.1/guide/index.html)组件配合使用  

2. 关于时间段 与 活动区块的关联说明： 时间段 区块 和 活动容器内的相对区块内容一一对应，即 时间轴第一个时间段 对应 活动容器里 第一个 活动区块；
3. 关于时间轴组件 样式/dom结构 说明：本例内置模板展现时间轴样式，若不满足需求，你可以自定义你的模板dom结构字符串传入，并配置相应的钩子和样式即可， 即：自定义样式结构，调用组件 传入相应的钩子，进行时间更新、样式、活动切换控制等逻辑应用；



## API说明 --- 时间 相关配置 ##
	// 起止时间具体配置 -- 字符串格式，比如： '2013-11-26 15:32:08'  
    startTime: '',  
    endTime: '',

    // 服务器初始化时间 默认 毫秒数、支持 标准时间字符串如：'2013-11-20 17:30:32'
    serviceTime: null,

    // 服务器 时间同步 url接口
    url: '',
    
    // 异步 时间同步 是否是jsonp  --默认
    isJsonp: true,
    
    // 异步更新时间配置，最低间隔 需要 >= 1分钟 -- 默认1小时
    ajaxUpMinutes: 60 
       
## API说明 --- 各时间段文本 配置 ##
    // 过去时间段 文本 设置（ps：使用内置模板时 添加文本 无效）
    pastStateText: '',

    // 当前时间段 文本 设置
    currtStateText: '开抢',

    // 未来时间段 文本 设置
    futureStateText: '即将开抢'

## API说明 --- 常用配置项 ##

```javascript
// 默认配置
var defCfg = {

    // 无效时间 是否 隐藏 时间轴 和 活动区块
    isInvalidTimeHide: true,

    // 是否自定义 不规则 时间段 -- 若此处开启 则需要 配置 下列 customTime 时间点数组
    isCustomTimePeriod: false,

    // 自定义时间点 数组, 规范的 时分字符串 ---  支持 时间大小顺序 随机排列, 时分字符串形式 支持 比如 "00", "02", "03:11", "0:2"等
    customTime: [], 

    // 固定间隔时间 -- 支持 时分字符串时间、毫秒数 配置
    timeLength: null, 

    // 浏览其他区块 停留 时间，然后自动返回 当前活动区块 默认 --  分钟 
    viewResidenceTime: 2,   

    // 未来时间段 是否 可查看
    isFutureView: true, 

	// 过去时间段 是否 可点击 查看
    isPastView: true,
	
	// 是否开启 自动ui更新
	isAutoUpdateUi: true,

	// 是否执行懒加载 textarea中的 js
    execScript: true,

    // 懒加载 textarea 钩子
    dataLazyloadCls: 'data-lazyload-cls'        
};
```








# ** 注意！ 若你需要 调整组件 DOM/样式 配置， 接着往下看：** #

## API说明 --- 组件 DOM/样式 配置 ##
    // 时间轴 timeTemplate 模板
    timeTemplate: '<a class="j_timeBlock"><span class="hours"></span><span class="state"></span></a>',
    
	// 过去时间段 样式
    doneCls: 'doneCls',

    // 当前时间段 样式
    currCls: 'currCls',

    // 未来时间段 样式
    futrueCls: 'futrueCls',

    // 过去时间段 点击查看 样式
    clickPastTimeBlockCls: 'clickPastTimeBlock',

    // 未来时间段 点击查看 样式
    clickFutureTimeBlock: 'clickFutureTimeBlock'

## API说明 --- 组件钩子 配置 ##
    // 时间模块 css钩子
    timeBlockCls: '.j_timeBlock',

    // 时分秒 时间 容器 css钩子
    hoursContainerCls: '.hours',

    // 时间 状态文本 容器 css钩子
    stateTextCls: '.state',

	// 活动展现内容区块 容器ID
    merchContainer: '#J_secondContent',

    // 活动展现内容区块 钩子
    merchBlockCls: '.j_ul'  


## API说明 --- 支持事件 ##
    /**  
	* 'currSpikeChange'
    * 当前时间段 时间触发
    * @event currSpikeChange  
    * @param {event} el对象
    * @param {Array} el.elTarget Dom元素 
    * @param {Array} el.timeStr  当前时间标签-字符串  比如：12:00 
    */
    

	