<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package company
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/sample1/css/sample1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/sample1/css/sp1animation.css">
    <title>sample1</title>
</head>

<body>
    <!--   header-->
    <div class="screen1">
        <header class="header">
            <div class="header__top">
                <a class="header__top__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/logo.png" alt="">
                    <h3>H5实战页面</h3>
                </a>
                <nav>
                    <a href="#online" class="header__nav__items">实战课程</a>
                    <a href="#case" class="header__nav__items">商业案例</a>
                    <a href="#system" class="header__nav__items">课程体系</a>
                    <a href="#local" class="header__nav__items">集成环境</a>
                    <a href="#easy" class="header__nav__items">云端学习</a>
                    <a href="" class="red">即刻学习</a>
                    <div class="header__nav-tip"></div>
                </nav>
            </div>
        </header>
        <main>
            <!--        第一屏-->
            <section class="c-main online" id="online">
                <div class="online__inner">
                    <h1 class="online__ttl">实战课程重磅上线</h1>
                    <p class="online__lead">一键云学习，还在等待什么？</p>
                </div>
            </section>
    </div>
    <!--       第二屏-->
    <section class="c-main case" id="case">
        <div class="c-main__inner case__inner">
            <h1 class="case__ttl">每门课都是真实商业案例</h1>
            <div class="case__lead">
                <div class="readline"></div>
                <p>真实案例，真实场景，在实战中实践、操作、调试<br />大牛带你体验BAT真实开发流程，所有开发过程一一为你呈现</p>
            </div>
            <div class="case__img">
                <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc2.png" alt="" class="case__img1">
                <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc2-2.png" alt="" class="case__img2">
                <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc2-1.png" alt="" class="case__img3">
            </div>
        </div>
    </section>
    <!--        第三屏-->
    <section class="c-main system" id="system">
        <div class="c-main__inner system__inner">
            <div class="system__img">
                <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc3.png" alt="">
            </div>
            <div class="system__text">
                <h2 class="system__ttl">强大的语言课程体系支持</h2>
                <div class="system__lead">
                    <div class="readline"></div>
                    <p>学习环境与课程轻松对接，安装、调试、写入、部署、运行，一站式解决，让你体验开发全流程</p>
                </div>
                <ul class="system__text__circle">
                    <li>HTML5</li>
                    <li>PHP</li>
                    <li>JAVA</li>
                    <li>Python</li>
                    <li>Node.js</li>
                </ul>
            </div>
        </div>
    </section>
    <!--        第四屏-->
    <section class="c-main local" id="local">
        <div class="c-main__inner local__inner">
            <h1 class="local__ttl">省去本地复杂的环境搭建</h1>
            <div class="local__lead">
                <div class="readline"></div>
                <p class="local__inner__lead">你可以告别在虚拟机中调试开发了</p>
            </div>
            <ul class="icons">
                <li class="local__icon1">
                    <div class="icons__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc4-1.png" alt="">
                    </div>
                    <p class="icons__text">实战课程集成开发环境</p>
                </li>
                <li class="local__icon2">
                    <div class="icons__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc4-2.png" alt="">
                    </div>
                    <p class="icons__text">内置终端命令行</p>
                </li>
                <li class="local__icon3">
                    <div class="icons__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc4-3.png" alt="">
                    </div>
                    <p class="icons__text">编译你的应用程序</p>
                </li>
                <li class="local__icon4">
                    <div class="icons__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc4-4.png" alt="">
                    </div>
                    <p class="icons__text">通过云端服务输出效果</p>
                </li>
            </ul>
        </div>
    </section>
    <!--        第五屏-->
    <section class="c-main easy" id="easy">
        <div class="easy__inner">
            <div class="c-main__inner">
                <div class="easy__inner__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/sample1/img/sc5-1.png" alt="">
                </div>
                <h1 class="easy__ttl">云端学习可以这样简单</h1>
                <div class="easy__lead">
                    <div class="readline"></div>
                    <p>看视频，敲代码，一气呵成。结合慕课网为你提供的云端学习工具，所见即所得。从此学习不一样</p>
                </div>
            </div>
        </div>
        <div class="c-main__inner button">
            <a href="#online">继续了解学习体验</a>
        </div>

    </section>


    </main>
    <!--    footer-->
    <footer>
        <div class="footer__top">
            <a href="">网站首页</a>
            <a href="">人才招聘</a>
            <a href="">联系我们</a>
            <a href="">高校联盟</a>
            <a href="">关于我们</a>
            <a href="">讲师招募</a>
            <a href="">意见反馈</a>
            <a href="">友情链接</a>
        </div>
        <p>Coding By Bai Ge</p>
    </footer>
    <!--        右侧导航栏-->
    <section class="navright">
        <a href="#online" class="navright__items">实</a>
        <a href="#case" class="navright__items">商</a>
        <a href="#system" class="navright__items">课</a>
        <a href="#local" class="navright__items">环</a>
        <a href="#easy" class="navright__items">云</a>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/sample1/common.js"></script>
</body>

</html>
