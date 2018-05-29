<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 2018/05/28 16:21
 * description:
 */

namespace yiier\validators;

use yii\validators\Validator;

class PhoneValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        $value = $model->$attribute;
        if (!preg_match("/^1[34578]{1}\d{9}$/", $value)) {
            $this->addError($model, $attribute, $this->message ?: '请输入正确的手机号码');
        }
    }
}