<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bike
 *
 * @property int $id
 * @property float $lng 经度
 * @property float $lat 纬度
 * @property int $is_riding 是否正在被骑行
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bike whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bike whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bike whereIsRiding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bike whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bike whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bike whereUpdatedAt($value)
 */
	class Bike extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rider
 *
 * @property int $id
 * @property int $user_id 用户编号
 * @property int $bike_id 单车编号
 * @property string $start_at 开始时间
 * @property string|null $end_at 结束时间
 * @property int|null $money 需支付的金额
 * @property int $is_pay 需支付的金额
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereBikeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereIsPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rider whereUserId($value)
 */
	class Rider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name 用户名
 * @property string|null $nickname 昵称
 * @property string|null $mobile 手机号码
 * @property string|null $weixin_open_id 微信OPENID
 * @property string|null $email 邮箱
 * @property int $gender 性别
 * @property string $password 密码
 * @property string|null $avatar 头像
 * @property int $is_deposit 是否缴纳押金
 * @property int $deposit_money 押金金额
 * @property int $money 余额
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDepositMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereWeixinOpenId($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name 用户名
 * @property string|null $nickname 昵称
 * @property string|null $mobile 手机号码
 * @property string|null $weixin_open_id 微信OPENID
 * @property string|null $email 邮箱
 * @property int $gender 性别
 * @property string $password 密码
 * @property string|null $avatar 头像
 * @property int $is_deposit 是否缴纳押金
 * @property int $deposit_money 押金金额
 * @property int $money 余额
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDepositMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereWeixinOpenId($value)
 */
	class User extends \Eloquent {}
}

