<?php
namespace app\controllers;

use app\web\controller;

class UserController extends controller
{
	
	function __construct(argument)
	{
		# code...
	}
	
	/* 处理用户登录相关方法
	 * @param $user[string]      用户帐号, 
	 *        $password[string]  用户密码, 
	 * 		  $remem[int]        记住登录时长
	 * @author Albert < 1014838101@qq.com >
	 */
	public static function actionLogin($user, $type, $password, $remem)
	{
		// 查询用户是否存在
		if($type == 1){
			// phone
			// 查询出用户salt加密码、password
			// 没有查询结果返回帐号不存在
		}elseif($type == 2){
			// email
			// 没有查询结果返回帐号不存在
		}elseif($type == 3){
			// 身份证
			// 没有查询结果返回帐号不存在
		}else{
			// 返回帐号类型错误
		}
		// 验证密码：用户输入密码经过加密与数据库密码对比

		// 设置记住登录：设置session保存时间

		// 返回登录成功code和用户相关数据
	}

	// 验证用户密码
	public static function actionVerityPassword($password, $dataPwd, $salt)
	{
		// 验证密码
	}

	public static function actionLogout($id)
	{
		// 处理用户退出
	}

	/*
	 * 通过各种用户参数获取用户信息，返回的数据为object
	 */
	public static function actionGetById($id)
	{
		// 通过ID获取用户信息
	}
	public static function actionGetByPhone($phone)
	{
		// 通过phone获取用户信息
	}
	public static function actionGetByEmail($email)
	{
		// 通过email获取用户信息
	}
	public static function actionGetByCard($card)
	{
		// 通过身份证号码获取用户信息
	}

	/*
	 * 对用户进行添加、禁用、删除、更新等操作
	 */
	public static function actionAdd($param)
	{
		// 添加用户
	}
	public static function actionUpdate($param)
	{
		// 用户信息更新
	}
	public static function actionForbidden($id, $time)
	{
		// 禁用用户[禁用时间]
	}
	public static function actionDelete($id)
	{
		// 删除用户信息，是否删除相关表
	}
}