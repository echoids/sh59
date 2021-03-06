<!--==========顶部固定导行条==========-->
<div id='top_wrap'>
    <div id="top">
        <div class='top_wrap'>
            <div class="logo fleft"></div>
            <ul class='top_left fleft'>
                <li class='cur_bg'><a href='__APP__'>首页</a></li>
                <li><a href="">发现</a></li>
                <li><a href="">视频</a></li>
                <li><a href="">游戏</a></li>
            </ul>
            <div id="search" class='fleft'>
                <form action='' method='get'>
                    <input type='text' name='keyword' id='sech_text' class='fleft' value='搜索微博、找人'/>
                    <input type='submit' value='' id='sech_sub' class='fleft'/>
                </form>
            </div>
            <div class="user fleft">
                <a href="">  <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>用户名</a>
            </div>
            <ul class='top_right fleft'>
                <li title='快速发微博' class='fast_send'><i class='icon icon-write'></i></li>
                <li class='selector'><i class='icon icon-msg'></i>
                    <ul class='hidden'>
                        <li><a href="">查看评论</a></li>
                        <li><a href="">查看私信</a></li>
                        <li><a href="">查看收藏</a></li>
                        <li><a href="">查看@我</a></li>
                    </ul>
                </li>
                <li class='selector'><i class='icon icon-setup'></i>
                    <ul class='hidden'>
                        <li><a href="">帐号设置</a></li>
                        <li><a href="" class='set_model'>模版设置</a></li>
                        <li><a href="">退出登录</a></li>
                    </ul>
                </li>
                <!--信息推送-->
                <li id='news' class='hidden'>
                    <i class='icon icon-news'></i>
                    <ul>
                        <li class='news_comment hidden'>
                            <a href=""></a>
                        </li>
                        <li class='news_letter hidden'>
                            <a href=""></a>
                        </li>
                        <li class='news_atme hidden'>
                            <a href=""></a>
                        </li>
                    </ul>
                </li>
                <!--信息推送-->
            </ul>
        </div>
    </div>
</div>
<!--==========顶部固定导行条==========-->
<!--==========加关注弹出框==========-->
<script type='text/javascript'>
    var addFollow = "";
</script>
<div id='follow'>
    <div class="follow_head">
        <span class='follow_text fleft'>关注好友</span>
    </div>
    <div class='sel-group'>
        <span>好友分组：</span>
        <select name="gid">
            <option value="0">默认分组</option>
            <foreach name='group' item='v'>
                <option value="">{$v.name}</option>
            </foreach>
        </select>
    </div>
    <div class='fl-btn-wrap'>
        <input type="hidden" name='follow'/>
        <span class='add-follow-sub'>关注</span>
        <span class='follow-cencle'>取消</span>
    </div>
</div>
<!--==========加关注弹出框==========-->

<!--==========自定义模版==========-->
<div id='model' class='hidden'>
    <div class="model_head">
        <span class="model_text">个性化设置</span>
        <span class="close fright"></span>
    </div>
    <ul>
        <li style='background:url(./Images/default.jpg) no-repeat;' theme='default'></li>
        <li style='background:url(./Images/style2.jpg) no-repeat;' theme='style2'></li>
        <li style='background:url(./Images/style3.jpg) no-repeat;' theme='style3'></li>
        <li style='background:url(./Images/style4.jpg) no-repeat;' theme='style4'></li>
    </ul>
    <div class='model_operat'>
        <span class='model_save'>保存</span>
        <span class='model_cancel'>取消</span>
    </div>
</div>
<!--==========自定义模版==========-->