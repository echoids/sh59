<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户表
        Schema::create('web_user', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('phone');
            $table->string('email');
            $table->string('password');
            $table->tinyInteger('status');
            $table->dateTime('trgtime');

        });
        //用户详细信息表
        Schema::create('web_user_per', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_icon');
            $table->string('user_name');
            $table->dateTime('birthday');
            $table->string('intro');
            $table->integer('sex');
            $table->string('addres');
            $table->integer('fens');
            $table->integer('attstatus');
            $table->integer('ban')->defaule('1');
        });
        //用户钱包表
        Schema::create('user_money', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('money');
        });
        //充值表
        Schema::create('recharge', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('money');
            $table->dateTime('time');
        });
        //分类表
        Schema::create('classify', function (Blueprint $table) {
            $table->increments('id');
           $table->string('class_name');
           $table->string('describe');
           $table->integer('visitor');
           $table->integer('recommend')->defaule('1');
            $table->integer('attstatus')->defaule('1');
            $table->integer('disstatus')->defaule('1');
            $table->integer('constatus')->defaule('1');
            $table->dateTime('time');
        });
        //微博表
        Schema::create('weibo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('img');
            $table->string('content');
            $table->dateTime('time');
            $table->integer('recommend')->defaule('1');
        });
        //关注表
        Schema::create('concern', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('touid');
            $table->integer('byuid');
            $table->dateTime('comcern_time');
        });
        //收藏表
        Schema::create('collect', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('weibo_id');
            $table->dateTime('collect_time');
        });
        //评论表
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->integer('user_id');
            $table->string('content');
            $table->dateTime('collect_time');
        });
        //回复表
        Schema::create('reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid');
            $table->integer('uid');
            $table->string('content');
            $table->dateTime('reply_time');
        });
        //点赞表
        Schema::create('zan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid');
            $table->integer('uid');
            $table->integer('bid');
            $table->string('content');
            $table->dateTime('zan_time');
        });

        //后台表
        //管理员
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('admin_name');
            $table->string('admin_password');
            $table->integer('role')->default('1');
            $table->integer('status')->default('1');
            $table->string('remarks');
        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
