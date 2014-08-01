<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>SpikeTimeline 秒杀时间控制组件1.1版本demo</title>
    <link rel="stylesheet" type="text/css" href="./active.css">
    <script src="http://g.tbcdn.cn/kissy/k/1.3.2/kissy-min.js" charset="utf-8"></script>
</head>
    
<body>

<div class="contpage">

    <!-- SpikeTimeline 时间容器， 容器时间段 dom请在模板里配置  -->
    <div class="section-block sends-container" id="J_time-container"></div>


    <!-- 注意：此处只是案例，并不属于控件的标准组成部分；你完全可以依据SpikeTimeline组件 时间标签click 事件 和 当前时间段 自动切换 触发事件，灵活自如的控制 当前时间相对应的 活动渲染和展现 形式-->
    <div class="mui-act-items mui-act-items-240 section-block" id="J_secondContent" style="border: 1px dashed orange;">   
        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >              
                    <li class="mui-act-item relative-cls">
                      <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35815222632&amp;scm=activity.10364.738598104.4687&amp;acm=activity.10364.738598104.4687" title="松桂坊-湘西后腿腊肉" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/738598104/T2PpSsXy8XXXXXXXXX-738598104.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">松桂坊-湘西后腿腊肉</p>
                        <del class="mui-act-tagPrice">专柜价：￥80</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                      </a>
                    </li>
                            <li class="mui-act-item relative-cls">
                                    <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=9388925919&amp;scm=activity.10364.217103012.4687&amp;acm=activity.10364.217103012.4687" title="泰莱德城堡AOC红酒" data-spm-anchor-id="0.0.0.0">
                            <img src="http://gtms03.alicdn.com/imgextra/i3/217103012/T2MZKsXwpXXXXXXXXX-217103012.jpg_q90.jpg" width="220" height="220">
                            <p class="mui-act-title">泰莱德城堡AOC红酒</p>
                            <del class="mui-act-tagPrice">专柜价：￥208</del>
                            <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                        </a>
                    </li>
                            <li class="mui-act-item relative-cls">
                                    <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=19208717222&amp;scm=activity.10364.1058110791.4687&amp;acm=activity.10364.1058110791.4687" title="ASC拉菲雾禾干白" data-spm-anchor-id="0.0.0.0">
                            <img src="http://gtms02.alicdn.com/imgextra/i2/1058110791/T2nSB.Xy4aXXXXXXXX_!!1058110791.jpg_q90.jpg" width="220" height="220">
                            <p class="mui-act-title">ASC拉菲雾禾干白</p>
                            <del class="mui-act-tagPrice">专柜价：￥297</del>
                            <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                        </a>
                    </li>
                            <li class="mui-act-item relative-cls">
                                    <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695488202&amp;scm=activity.10364.570460963.4687&amp;acm=activity.10364.570460963.4687" title="53°茅台飞天500ml" data-spm-anchor-id="0.0.0.0">
                            <img src="http://gtms02.alicdn.com/imgextra/i2/570460963/T2E3IhXcRaXXXXXXXX-570460963.jpg_q90.jpg" width="220" height="220">
                            <p class="mui-act-title">53°茅台飞天500ml</p>
                            <del class="mui-act-tagPrice">专柜价：￥1519</del>
                            <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                        </a>
                    </li>
                        
                </ul>
            </textarea> 
        </div>
       

        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35348078485&amp;mt=&amp;scm=activity.10364.722675748.4653&amp;acm=activity.10364.722675748.4653" title="口水鱼新4口味40包" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms03.alicdn.com/imgextra/i3/722675748/T2_4umXt0aXXXXXXXX-722675748.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">口水鱼新4口味40包</p>
                        <del class="mui-act-tagPrice">专柜价：￥65.00</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35388802520&amp;scm=activity.10364.1081840805.4653&amp;acm=activity.10364.1081840805.4653" title="经典伯爵夫人红酒" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/1081840805/T2cWPMXf0bXXXXXXXX-1081840805.jpg" width="220" height="220">
                        <p class="mui-act-title">经典伯爵夫人红酒</p>
                        <del class="mui-act-tagPrice">专柜价：￥218</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=18519553596&amp;scm=activity.10364.1094595558.4653&amp;acm=activity.10364.1094595558.4653" title="宋河秘藏5号品鉴酒" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms03.alicdn.com/imgextra/i3/1094595558/T2ZxGtXqVXXXXXXXXX-1094595558.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">宋河秘藏5号品鉴酒</p>
                        <del class="mui-act-tagPrice">专柜价：￥218</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35715465685&amp;scm=activity.10364.1579528508.4653&amp;acm=activity.10364.1579528508.4653" title="獐子岛 香辣虾夷全贝" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/1579528508/T2AVpzXERaXXXXXXXX_!!1579528508.jpg" width="220" height="220">
                        <p class="mui-act-title">獐子岛 香辣虾夷全贝</p>
                        <del class="mui-act-tagPrice">专柜价：￥68</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>

        <div class="j_ul">
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img j_ul section-block" >                
                        <li class="mui-act-item relative-cls">
                          <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35815222632&amp;scm=activity.10364.738598104.4687&amp;acm=activity.10364.738598104.4687" title="松桂坊-湘西后腿腊肉" data-spm-anchor-id="0.0.0.0">
                            <img src="http://gtms04.alicdn.com/imgextra/i4/738598104/T2PpSsXy8XXXXXXXXX-738598104.jpg_q90.jpg" width="220" height="220">
                            <p class="mui-act-title">松桂坊-湘西后腿腊肉</p>
                            <del class="mui-act-tagPrice">专柜价：￥80</del>
                            <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                          </a>
                        </li>
                                <li class="mui-act-item relative-cls">
                                        <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=9388925919&amp;scm=activity.10364.217103012.4687&amp;acm=activity.10364.217103012.4687" title="泰莱德城堡AOC红酒" data-spm-anchor-id="0.0.0.0">
                                <img src="http://gtms03.alicdn.com/imgextra/i3/217103012/T2MZKsXwpXXXXXXXXX-217103012.jpg_q90.jpg" width="220" height="220">
                                <p class="mui-act-title">泰莱德城堡AOC红酒</p>
                                <del class="mui-act-tagPrice">专柜价：￥208</del>
                                <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                            </a>
                        </li>
                                <li class="mui-act-item relative-cls">
                                        <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=19208717222&amp;scm=activity.10364.1058110791.4687&amp;acm=activity.10364.1058110791.4687" title="ASC拉菲雾禾干白" data-spm-anchor-id="0.0.0.0">
                                <img src="http://gtms02.alicdn.com/imgextra/i2/1058110791/T2nSB.Xy4aXXXXXXXX_!!1058110791.jpg_q90.jpg" width="220" height="220">
                                <p class="mui-act-title">ASC拉菲雾禾干白</p>
                                <del class="mui-act-tagPrice">专柜价：￥297</del>
                                <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                            </a>
                        </li>
                                <li class="mui-act-item relative-cls">
                                        <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695488202&amp;scm=activity.10364.570460963.4687&amp;acm=activity.10364.570460963.4687" title="53°茅台飞天500ml" data-spm-anchor-id="0.0.0.0">
                                <img src="http://gtms02.alicdn.com/imgextra/i2/570460963/T2E3IhXcRaXXXXXXXX-570460963.jpg_q90.jpg" width="220" height="220">
                                <p class="mui-act-title">53°茅台飞天500ml</p>
                                <del class="mui-act-tagPrice">专柜价：￥1519</del>
                                <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                            </a>
                        </li>
                            
                </ul>
            </textarea> 
        </div>

        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35690847647" title="周黑鸭 鸭掌230g" data-spm-anchor-id="0.0.0.0">
                        <img src="http://img01.taobaocdn.com/imgextra/i1/392147177/T2hDenXBJXXXXXXXXX-392147177.jpg" width="220" height="220">
                        <p class="mui-act-title">周黑鸭 鸭掌230g</p>
                        <del class="mui-act-tagPrice">专柜价：￥48</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=15115286664" title="盖亚农场有机湖水米" data-spm-anchor-id="0.0.0.0">
                        <img src="http://img02.taobaocdn.com/imgextra/i2/836071067/T2CvCpXvxXXXXXXXXX-836071067.jpg" width="220" height="220">
                        <p class="mui-act-title">盖亚农场有机湖水米</p>
                        <del class="mui-act-tagPrice">专柜价：￥129.9</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35690927877" title="52°孔府家红吉祥500ml" data-spm-anchor-id="0.0.0.0">
                        <img src="http://img02.taobaocdn.com/imgextra/i2/570460963/T2DBTdXhdbXXXXXXXX-570460963.jpg" width="220" height="220">
                        <p class="mui-act-title">52°孔府家红吉祥500ml</p>
                        <del class="mui-act-tagPrice">专柜价：￥48</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35345804668" title="全场1折起美酒大派送" data-spm-anchor-id="0.0.0.0">
                        <img src="http://img03.taobaocdn.com/imgextra/i3/684759390/T2LjasXrJXXXXXXXXX_!!684759390.jpg" width="220" height="220">
                        <p class="mui-act-title">全场1折起美酒大派送</p>
                        <del class="mui-act-tagPrice">专柜价：￥208</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>

        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
               <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img j_ul section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35697480733&amp;rn=b1285a75650e1527918c59dd6fad7a6b&amp;scm=activity.10364.1.4666&amp;acm=activity.10364.1.4666" title="谢裕大明前嫩芽75G" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/673491580/T2q75mXrxaXXXXXXXX_!!673491580.jpg" width="220" height="220">
                        <p class="mui-act-title">谢裕大明前嫩芽75G</p>
                        <del class="mui-act-tagPrice">专柜价：￥158</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=18340543485&amp;scm=activity.10364.2.4666&amp;acm=activity.10364.2.4666" title="绍兴黄酒 醉美礼盒" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/686547994/T2_f8oXDFaXXXXXXXX-686547994.jpg" width="220" height="220">
                        <p class="mui-act-title">绍兴黄酒 醉美礼盒</p>
                        <del class="mui-act-tagPrice">专柜价：￥295</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695442403&amp;scm=activity.10364.3.4666&amp;acm=activity.10364.3.4666" title="西域良品和田骏枣" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/825210604/T2OcBAXDpaXXXXXXXX_!!825210604.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">西域良品和田骏枣</p>
                        <del class="mui-act-tagPrice">专柜价：￥60</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=25705196801&amp;scm=activity.10364.4.4666&amp;acm=activity.10364.4.4666" title="小福仙38度" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/1126138680/T2r9pfXqtbXXXXXXXX-1126138680.jpg" width="220" height="220">
                        <p class="mui-act-title">小福仙38度</p>
                        <del class="mui-act-tagPrice">专柜价：￥219</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>


        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                <li class="mui-act-item relative-cls">
                    <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35707930356&amp;scm=activity.10364.1.4667&amp;acm=activity.10364.1.4667" title="获奖波尔多佩格斯城堡" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/414148352/T2.zlNXCtaXXXXXXXX-414148352.jpg" width="220" height="220">
                        <p class="mui-act-title">获奖波尔多佩格斯城堡</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35345859716&amp;scm=activity.10364.2.4667&amp;acm=activity.10364.2.4667" title="大米500g*3袋" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/931514117/T2Cn9dXtVaXXXXXXXX_!!931514117.jpg" width="220" height="220">
                        <p class="mui-act-title">大米500g*3袋</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=18596839445&amp;scm=activity.10364.3.4667&amp;acm=activity.10364.3.4667" title="茅台迎宾酒度嘉宾级" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/1062782920/T21cp5XytaXXXXXXXX_!!1062782920.jpg" width="220" height="220">
                        <p class="mui-act-title">茅台迎宾酒度嘉宾级</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35707895303&amp;scm=activity.10364.4.4667&amp;acm=activity.10364.4.4667" title="瑞士莲经典牛奶薄片" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/1107557890/T22SG.XjXaXXXXXXXX_!!1107557890.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">瑞士莲经典牛奶薄片</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>


        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=16551934726&amp;scm=activity.10364.1.5180&amp;acm=activity.10364.1.5180" title="酣畅 4块牛排送刀叉" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/649012701/T29cVGXhdNXXXXXXXX_!!649012701.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">酣畅 4块牛排送刀叉</p>
                        <del class="mui-act-tagPrice">专柜价：￥130</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695488202&amp;scm=activity.10364.2.5180&amp;acm=activity.10364.2.5180" title="53°茅台飞天500ml" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/570460963/T2E3IhXcRaXXXXXXXX-570460963.jpg" width="220" height="220">
                        <p class="mui-act-title">53°茅台飞天500ml</p>
                        <del class="mui-act-tagPrice">专柜价：￥1519</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695314501&amp;scm=activity.10364.3.5180&amp;acm=activity.10364.3.5180" title="淘豆牛肉条400g" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/708297530/T2fCJmXEXaXXXXXXXX-708297530.jpg" width="220" height="220">
                        <p class="mui-act-title">淘豆牛肉条400g</p>
                        <del class="mui-act-tagPrice">专柜价：￥64.7</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35691101584&amp;scm=activity.10364.4.5180&amp;acm=activity.10364.4.5180" title="红星46°珍品二锅头" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms03.alicdn.com/imgextra/i3/1718249696/T2LzqqXAVXXXXXXXXX_!!1718249696.jpg" width="220" height="220">
                        <p class="mui-act-title">红星46°珍品二锅头</p>
                        <del class="mui-act-tagPrice">专柜价：￥308</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>


        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                 <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35385730572&amp;scm=activity.10364.1.4669&amp;acm=activity.10364.1.4669" title="精美礼品套组" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/tps/i1/T1UBEJFXBXXXXUT7Zy-220-220.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">精美礼品套组</p>
                        <del class="mui-act-tagPrice">专柜价：￥101</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35348797609&amp;scm=activity.10364.2.4669&amp;acm=activity.10364.2.4669" title="丑耳250G×2包" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/632759163/T2JoJeXz0aXXXXXXXX-632759163.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">丑耳250G×2包</p>
                        <del class="mui-act-tagPrice">专柜价：￥119.8</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=17289477152&amp;scm=activity.10364.3.4669&amp;acm=activity.10364.3.4669" title="芝华士特别版铁罐装" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/731926634/T2TGQOXltaXXXXXXXX-731926634.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">芝华士特别版铁罐装</p>
                        <del class="mui-act-tagPrice">专柜价：￥510</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35264497685&amp;scm=activity.10364.4.4669&amp;acm=activity.10364.4.4669" title="53°二十年青花郎酒500ml" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/tps/i1/T1dQEEFmdeXXXUT7Zy-220-220.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">53°二十年青花郎酒500ml</p>
                        <del class="mui-act-tagPrice">专柜价：￥2136</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>


        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://item.taobao.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=15364174539&amp;scm=activity.10363.1.4661&amp;acm=activity.10363.1.4661" title="雷拉斯玫瑰红果香型" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/274042090/T2EGyoXrJaXXXXXXXX_!!274042090.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">雷拉斯玫瑰红果香型</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35348879510&amp;scm=activity.10363.2.4661&amp;acm=activity.10363.2.4661" title="38°国密董酒" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/570460963/T2k059XgRbXXXXXXXX-570460963.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">38°国密董酒</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695028223&amp;scm=activity.10363.3.4661&amp;acm=activity.10363.3.4661" title="炭烧腰果120g*2" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/628189716/T2llicXqBaXXXXXXXX-628189716.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">炭烧腰果120g*2</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=19471254616&amp;scm=activity.10363.4.4661&amp;acm=activity.10363.4.4661" title="攀枝花甜石榴5斤" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/923679694/T2PKimXrRaXXXXXXXX_!!923679694.jpg_q90.jpg" width="220" height="220">
                        <p class="mui-act-title">攀枝花甜石榴5斤</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>


        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35790976200&amp;scm=activity.10364.606626559.4664&amp;acm=activity.10364.606626559.4664" title="柯林蓝山咖啡豆x2袋" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/606626559/T2iGhbXbXPXXXXXXXX-606626559.jpg" width="220" height="220">
                        <p class="mui-act-title">柯林蓝山咖啡豆x2袋</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=5038974421&amp;scm=activity.10364.394316784.4664&amp;acm=activity.10364.394316784.4664" title="500ml参茸劲酒" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/394316784/T2TR5qXDXXXXXXXXXX-394316784.jpg" width="220" height="220">
                        <p class="mui-act-title">500ml参茸劲酒</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=16276613526&amp;scm=activity.10364.479880648.4664&amp;acm=activity.10364.479880648.4664" title="澄皇阳澄湖大闸蟹套餐" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/479880648/T2PvVUXA8aXXXXXXXX-479880648.jpg" width="220" height="220">
                        <p class="mui-act-title">澄皇阳澄湖大闸蟹套餐</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695464138&amp;scm=activity.10364.1801754147.4664&amp;acm=activity.10364.1801754147.4664" title="五粮液100ml" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/1801754147/T2LhCtXqRXXXXXXXXX_!!1801754147.jpg" width="220" height="220">
                        <p class="mui-act-title">五粮液100ml</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>



        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
               <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                <li class="mui-act-item relative-cls">
                    <div class="mast-dia">秒杀结束</div>
                        <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35715296933&amp;scm=activity.10364.184131135.5143&amp;acm=activity.10364.184131135.5143" title="[金字火腿蹄片]" data-spm-anchor-id="0.0.0.0">
                            <img src="http://gtms03.alicdn.com/imgextra/i3/184131135/T2sTVWXC4aXXXXXXXX-184131135.jpg" width="220" height="220">
                            <p class="mui-act-title">[金字火腿蹄片]</p>
                            <del class="mui-act-tagPrice">专柜价：￥</del>
                            <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                        </a>
                </li>
                <li class="mui-act-item relative-cls">
                    <div class="mast-dia">秒杀结束</div>
                    <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35695377482&amp;scm=activity.10364.389048191.5143&amp;acm=activity.10364.389048191.5143" title="【好想你】无核即食枣" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/389048191/T20w9jXwFaXXXXXXXX-389048191.jpg" width="220" height="220">
                        <p class="mui-act-title">【好想你】无核即食枣</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                <li class="mui-act-item relative-cls">
                    <div class="mast-dia">秒杀结束</div>
                    <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=22366812113&amp;scm=activity.10364.435712954.5143&amp;acm=activity.10364.435712954.5143" title="西班牙皇家系列赤霞珠" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/435712954/T2JPJDXANaXXXXXXXX-435712954.jpg" width="220" height="220">
                        <p class="mui-act-title">西班牙皇家系列赤霞珠</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=18678015711&amp;scm=activity.10364.498145397.5143&amp;acm=activity.10364.498145397.5143" title="德菲丝 巧克力大礼包" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms02.alicdn.com/imgextra/i2/498145397/T2zbWrXzdXXXXXXXXX-498145397.jpg" width="220" height="220">
                        <p class="mui-act-title">德菲丝 巧克力大礼包</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>



        <div class="j_ul"> 
            <textarea class="data-lazyload-cls" style="width:0; height:0; display:none;">
                <ul class="mui-act-items-inner mui-act-shi-10231123 mui-act-block-img section-block" >
            
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35699428384&amp;scm=activity.10364.105152347.4655&amp;acm=activity.10364.105152347.4655" title="新农哥澳洲夏威夷果" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/105152347/T29jhRXyxaXXXXXXXX-105152347.jpg" width="220" height="220">
                        <p class="mui-act-title">新农哥澳洲夏威夷果</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35693303631&amp;scm=activity.10364.131397425.4655&amp;acm=activity.10364.131397425.4655" title="新益号龙饼普洱茶熟茶" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms04.alicdn.com/imgextra/i4/131397425/T2bahWXzFaXXXXXXXX-131397425.jpg" width="220" height="220">
                        <p class="mui-act-title">新益号龙饼普洱茶熟茶</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35389318789&amp;scm=activity.10364.202224264.4655&amp;acm=activity.10364.202224264.4655" title="五谷磨房益降三高粉" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms01.alicdn.com/imgextra/i1/202224264/T2mZ03XxXaXXXXXXXX-202224264.jpg" width="220" height="220">
                        <p class="mui-act-title">五谷磨房益降三高粉</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                        <li class="mui-act-item relative-cls">
                                <div class="mast-dia">秒杀结束</div>
                                <a class="mui-act-a" href="http://detail.tmall.com/item.htm?spm=0.0.0.0.BS7FFy&amp;id=35690581930&amp;scm=activity.10364.570460963.4655&amp;acm=activity.10364.570460963.4655" title="52°五粮液1618陶瓷瓶500ml" data-spm-anchor-id="0.0.0.0">
                        <img src="http://gtms03.alicdn.com/imgextra/i3/570460963/T2MlpYXCxaXXXXXXXX-570460963.jpg" width="220" height="220">
                        <p class="mui-act-title">52°五粮液1618陶瓷瓶500ml</p>
                        <del class="mui-act-tagPrice">专柜价：￥</del>
                        <b class="mui-act-kuang11">11.01秒杀价：<b class="price">￥<em class="var_price">1</em></b></b>
                    </a>
                </li>
                    
            </ul>
            </textarea> 
        </div>
    </div>

</div>   

  
<script type="text/javascript">
    var S = KISSY;
        S.Config.debug = true;

    if (S.Config.debug) {
        var srcPath = "../../../";

        S.config({
            packages:[
                {
                    name:"gallery",
                    path:srcPath,
                    charset:"utf-8",
                    ignorePackageNameInUri:true
                }
            ]
        });
    }

    KISSY.ready(function(S){ 
	
        // 双十一整点秒杀 组件
        S.use('gallery/spike-Timeline/1.1/index', function(S, SpikeTimeline){
			

			// 初始化 时间轴 秒杀控制js
			var spikeTimelineObj = new SpikeTimeline('#J_time-container', {

                // 服务器初始化时间 默认 毫秒数 number、支持日期时间 字符串如：'2013-11-20 17:30:32'
                serviceTime: <?php echo time()*1000 ?>,
                    
                // 服务器时间 url接口
                url: 'http://www.tmall.com/go/rgn/get_server_time.php?spm=0.0.0.0.c01Zvr',

				// 时间范围 配置 --必须配置 ，否则可能导致 无js效果
				startTime: '2013-11-20 00:00:00',  
				endTime: '2100-11-11 23:59:59',

				// 秒杀 固定 间隔 支持 到分钟 -- 字符串 或者 毫秒数
				timeLength: '2'		

                // 是否 自定义时间点
                // isCustomTimePeriod: true,

                // 自定义时间点 数组, 规范的 时分字符串 ---  支持 时间大小顺序 随机排列, 时分字符串形式 支持 比如 "00", "02", "03:11", "0:2"等
                // customTime: ['20:16', '20:17', '20:20'], 
		
			});


            // 监控2大事件 --- 时间标签click 事件监控、 当前时间发生 监控
            spikeTimelineObj.on('spikeTimeClick currSpikeChange', function(el){
                S.log('当前时间: '+ el.timeStr);
            });

        });
           
    });

</script> 
</body>
<html>