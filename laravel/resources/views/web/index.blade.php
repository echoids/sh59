@extends('layouts/master')
@section('title','首页')
<!--==========内容主体==========-->
@section('content')
        <!--=====中部=====-->
            <div id="middle" class='fleft'>
            <!--微博发布框-->
            <div class="center">
                <div class='send_wrap'>
                    <div class='send_title fleft'></div>
                    <div class='send_write'>
                        <form action='' method='post' name='weibo'>
                            <textarea sign='weibo' name='content'></textarea>
                            <span class='ta_right'></span>
                            <div class='send_tool'>
                                <ul class='fleft'>
                                    <li title='表情'><i class='icon icon-phiz phiz' sign='weibo'></i></li>
                                    <li title='图片'><i class='icon icon-picture'></i>
                                    <!--图片上传框-->
                                        <div id="upload_img" class='hidden'>
                                            <div class='upload-title'><p>本地上传</p><span class='close'></span></div>
                                            <div class='upload-btn'>
                                                <input type="hidden" name='max' value=''/>
                                                <input type="hidden" name='medium' value=''/>
                                                <input type="hidden" name='mini' value=''/>
                                                <input type="file" name='picture' id='picture'/>
                                            </div>
                                        </div>
                                    <!--图片上传框-->
                                        <div id='pic-show' class='hidden'>
                                            <img src="" alt=""/>
                                        </div>
                                    </li>
                                </ul>
                                <input type='submit' value='' class='send_btn fright' title='发布微博按钮'/>
                            </div>
                        </form>
                    </div>
                </div>

            <!--微博发布框-->
                <div class='view_line'>
                    <strong>微博</strong>
                </div>
        </div>
    <!--====================普通微博样式====================-->
                <div class="weibo weiboall">
                    <!--头像-->
                    <div class="face">
                        <a href="">
                            <img src="./Theme/default/Images/head1.jpg" width='50' height='50'/>
                        </a>
                    </div>
                    <div class="wb_cons">
                        <dl>
                        <!--用户名-->
                            <dt class='author'>
                                <a href="">用户名</a>
                            </dt>
                            <dd class='time'>
                                16分钟前   
                            </dd>

                        <!--发布内容-->
                            <dd class='content'>
                                <p>给慈善与思想一个浪漫的出口，预祝画展圆满成功[作揖][作揖]生日快乐！</p>
                            </dd>
                        <!--微博图片-->
                        <if condition="$v['max']">
                            <dd>
                                <div class='wb_img'>
                                <!--小图-->
                                    <img src="./Theme/default/Images/head1.jpg" class='mini_img'/>
                                    <div class="img_tool hidden">
                                        <ul>
                                            <li>
                                                <i class='icon icon-packup'></i>
                                                <span class='packup'>&nbsp;收起</span>
                                            </li>
                                            <li>|</li>
                                            <li>
                                                <i class='icon icon-bigpic'></i>
                                                <a href="./Theme/default/Images/head1.jpg" target='_blank'>&nbsp;查看大图</a>
                                            </li>
                                        </ul>
                                    <!--中图-->
                                        <div class="img_info"><img src="./Theme/default/Images/head1.jpg"/></div>
                                    </div>
                                </div>
                            </dd>
                        </if>
                        </dl>
                    <!--操作-->
                       <div class="wb_tool">
                            <ul>
                                <li class='keep-wrap'>
                                    <span class='keep'>收藏</span>
                                    <div class='keep-up hidden'></div>
                                    <li>|</li>
                                </li>
                                <li><span class='turn keep'>转发200</span></li>
                                <li>|</li>
                                <li><span class='comment keep'>评论270</span></li>
                                <li>|</li>
                                <li><span class='comment keep'>赞200</span></li>
                            </ul>
                        </div>
                    <!--=====回复框=====-->
                        <div class='comment_load hidden'>
                            <img src="./Images/loading.gif">评论加载中，请稍候...
                        </div>
                        <div class='comment_list hidden'>
                            <textarea name="" sign='comment{$key}'></textarea>
                            <ul>
                                <li class='phiz fleft' sign='comment{$key}'></li>
                                <li class='comment_turn fleft'>
                                    <label>
                                        <input type="checkbox" name=''/>同时转发到我的微博
                                    </label>
                                </li>
                                <li class='comment_btn fright' wid='{$v.id}' uid='{$v.uid}'>评论</li>
                            </ul>
                        </div>
                    <!--=====回复框结束=====-->
                    </div>
                </div>
                 <div class="weibo weiboall">
                    <!--头像-->
                    <div class="face">
                        <a href="">
                            <img src="./Theme/default/Images/head1.jpg" width='50' height='50'/>
                        </a>
                    </div>
                    <div class="wb_cons">
                        <dl>
                        <!--用户名-->
                            <dt class='author'>
                                <a href="">用户名</a>
                            </dt>
                            <dd class='time'>
                                16分钟前   
                            </dd>

                        <!--发布内容-->
                            <dd class='content'>
                                <p>给慈善与思想一个浪漫的出口，预祝画展圆满成功[作揖][作揖]生日快乐！</p>
                            </dd>
                        <!--微博图片-->
                        <if condition="$v['max']">
                            <dd>
                                <div class='wb_img'>
                                <!--小图-->
                                    <img src="./Theme/default/Images/head1.jpg" class='mini_img'/>
                                    <div class="img_tool hidden">
                                        <ul>
                                            <li>
                                                <i class='icon icon-packup'></i>
                                                <span class='packup'>&nbsp;收起</span>
                                            </li>
                                            <li>|</li>
                                            <li>
                                                <i class='icon icon-bigpic'></i>
                                                <a href="./Theme/default/Images/head1.jpg" target='_blank'>&nbsp;查看大图</a>
                                            </li>
                                        </ul>
                                    <!--中图-->
                                        <div class="img_info"><img src="./Theme/default/Images/head1.jpg"/></div>
                                    </div>
                                </div>
                            </dd>
                        </if>
                        </dl>
                    <!--操作-->
                       <div class="wb_tool">
                            <ul>
                                <li class='keep-wrap'>
                                    <span class='keep'>收藏</span>
                                    <div class='keep-up hidden'></div>
                                    <li>|</li>
                                </li>
                                <li><span class='turn'>转发</span></li>
                                <li>|</li>
                                <li><span class='comment'>评论</span></li>
                                <li>|</li>
                                <li><span class='comment'>赞</span></li>
                            </ul>
                        </div>
                    <!--=====回复框=====-->
                        <div class='comment_load hidden'>
                            <img src="./Images/loading.gif">评论加载中，请稍候...
                        </div>
                        <div class='comment_list hidden'>
                            <textarea name="" sign='comment{$key}'></textarea>
                            <ul>
                                <li class='phiz fleft' sign='comment{$key}'></li>
                                <li class='comment_turn fleft'>
                                    <label>
                                        <input type="checkbox" name=''/>同时转发到我的微博
                                    </label>
                                </li>
                                <li class='comment_btn fright' wid='{$v.id}' uid='{$v.uid}'>评论</li>
                            </ul>
                        </div>
                    <!--=====回复框结束=====-->
                    </div>
                </div>

    <!--====================转发样式====================-->
                {{--<div class="weibo">--}}
                {{--<!--头像-->--}}
                     {{--<div class="face">--}}
                        {{--<a href="{:U('/' . $v['uid'])}">--}}
                            {{--<img src="--}}
                            {{--<if condition='$v["face"]'>--}}
                                {{--./Uploads/Face/{$v.face}--}}
                            {{--<else/>--}}
                                {{--./Images/noface.gif--}}
                            {{--</if>" width='50' height='50'/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
    <!--====================转发样式结束====================-->
        </if>
    </foreach>
    </if>
                <div id='page'>{$page}</div>
            </div>


    

<!--==========转发输入框==========-->
    <div id='turn' class='hidden'>
        <div class="turn_head">
            <span class='turn_text fleft'>转发微博</span>
            <span class="close fright"></span>
        </div>
        <div class="turn_main">
            <form action='{:U("Index/turn")}' method='post' name='turn'>
                <p></p>
                <div class='turn_prompt'>
                    你还可以输入<span id='turn_num'>140</span>个字</span>
                </div>
                <textarea name='content' sign='turn'></textarea>
                <ul>
                    <li class='phiz fleft' sign='turn'></li>
                    <li class='turn_comment fleft'>
                        <label>
                            <input type="checkbox" name='becomment'/>同时评论给<span class='turn-cname'></span>
                        </label>
                    </li>
                    <li class='turn_btn fright'>
                        <input type="hidden" name='id' value=''/>
                        <input type="hidden" name='tid' value=''/>
                        <input type="submit" value='转发' class='turn_btn'/>
                    </li>
                </ul>
            </form>
        </div>
    </div>
<!--==========转发输入框==========-->

<!--==========表情选择框==========-->
    <div id="phiz" class='hidden'>
        <div>
            <p>常用表情</p>
            <span class='close fright'></span>
        </div>
        <ul>
            <li><img src="./Images/phiz/hehe.gif" alt="呵呵" title="呵呵" /></li>
            <li><img src="./Images/phiz/xixi.gif" alt="嘻嘻" title="嘻嘻" /></li>
            <li><img src="./Images/phiz/haha.gif" alt="哈哈" title="哈哈" /></li>
            <li><img src="./Images/phiz/keai.gif" alt="可爱" title="可爱" /></li>
            <li><img src="./Images/phiz/kelian.gif" alt="可怜" title="可怜" /></li>
            <li><img src="./Images/phiz/wabisi.gif" alt="挖鼻屎" title="挖鼻屎" /></li>
            <li><img src="./Images/phiz/chijing.gif" alt="吃惊" title="吃惊" /></li>
            <li><img src="./Images/phiz/haixiu.gif" alt="害羞" title="害羞" /></li>
            <li><img src="./Images/phiz/jiyan.gif" alt="挤眼" title="挤眼" /></li>
            <li><img src="./Images/phiz/bizui.gif" alt="闭嘴" title="闭嘴" /></li>
            <li><img src="./Images/phiz/bishi.gif" alt="鄙视" title="鄙视" /></li>
            <li><img src="./Images/phiz/aini.gif" alt="爱你" title="爱你" /></li>
            <li><img src="./Images/phiz/lei.gif" alt="泪" title="泪" /></li>
            <li><img src="./Images/phiz/touxiao.gif" alt="偷笑" title="偷笑" /></li>
            <li><img src="./Images/phiz/qinqin.gif" alt="亲亲" title="亲亲" /></li>
            <li><img src="./Images/phiz/shengbin.gif" alt="生病" title="生病" /></li>
            <li><img src="./Images/phiz/taikaixin.gif" alt="太开心" title="太开心" /></li>
            <li><img src="./Images/phiz/ldln.gif" alt="懒得理你" title="懒得理你" /></li>
            <li><img src="./Images/phiz/youhenhen.gif" alt="右哼哼" title="右哼哼" /></li>
            <li><img src="./Images/phiz/zuohenhen.gif" alt="左哼哼" title="左哼哼" /></li>
            <li><img src="./Images/phiz/xiu.gif" alt="嘘" title="嘘" /></li>
            <li><img src="./Images/phiz/shuai.gif" alt="衰" title="衰" /></li>
            <li><img src="./Images/phiz/weiqu.gif" alt="委屈" title="委屈" /></li>
            <li><img src="./Images/phiz/tu.gif" alt="吐" title="吐" /></li>
            <li><img src="./Images/phiz/dahaqian.gif" alt="打哈欠" title="打哈欠" /></li>
            <li><img src="./Images/phiz/baobao.gif" alt="抱抱" title="抱抱" /></li>
            <li><img src="./Images/phiz/nu.gif" alt="怒" title="怒" /></li>
            <li><img src="./Images/phiz/yiwen.gif" alt="疑问" title="疑问" /></li>
            <li><img src="./Images/phiz/canzui.gif" alt="馋嘴" title="馋嘴" /></li>
            <li><img src="./Images/phiz/baibai.gif" alt="拜拜" title="拜拜" /></li>
            <li><img src="./Images/phiz/sikao.gif" alt="思考" title="思考" /></li>
            <li><img src="./Images/phiz/han.gif" alt="汗" title="汗" /></li>
            <li><img src="./Images/phiz/kun.gif" alt="困" title="困" /></li>
            <li><img src="./Images/phiz/shuijiao.gif" alt="睡觉" title="睡觉" /></li>
            <li><img src="./Images/phiz/qian.gif" alt="钱" title="钱" /></li>
            <li><img src="./Images/phiz/shiwang.gif" alt="失望" title="失望" /></li>
            <li><img src="./Images/phiz/ku.gif" alt="酷" title="酷" /></li>
            <li><img src="./Images/phiz/huaxin.gif" alt="花心" title="花心" /></li>
            <li><img src="./Images/phiz/heng.gif" alt="哼" title="哼" /></li>
            <li><img src="./Images/phiz/guzhang.gif" alt="鼓掌" title="鼓掌" /></li>
            <li><img src="./Images/phiz/yun.gif" alt="晕" title="晕" /></li>
            <li><img src="./Images/phiz/beishuang.gif" alt="悲伤" title="悲伤" /></li>
            <li><img src="./Images/phiz/zuakuang.gif" alt="抓狂" title="抓狂" /></li>
            <li><img src="./Images/phiz/heixian.gif" alt="黑线" title="黑线" /></li>
            <li><img src="./Images/phiz/yinxian.gif" alt="阴险" title="阴险" /></li>
            <li><img src="./Images/phiz/numa.gif" alt="怒骂" title="怒骂" /></li>
            <li><img src="./Images/phiz/xin.gif" alt="心" title="心" /></li>
            <li><img src="./Images/phiz/shuangxin.gif" alt="伤心" title="伤心" /></li>
        </ul>
    </div>
@endsection
<!--==========表情==========-->
</body>
</html>