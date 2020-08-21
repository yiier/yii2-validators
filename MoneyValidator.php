<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 2018/6/21/021 20:10
 * description:
 */

namespace yiier\validators;


use yii\validators\Validator;

class MoneyValidator extends Validator
{
    public $pattern = '';

    public $allowsNegative = false;

    /**
     * 验证数字是两位小数、一位小数、整数
     * @param \yii\base\Model $model
     * @param string $attribute
     */
    public function validateAttribute($model, $attribute)
    {
        $pattern = $this->allowsNegative ? '/^\-?\d+(\.\d{1,2})?$/i' : '/^\d+(\.\d{1,2})?$/';
        $value = $model->$attribute;
        if (!preg_match($this->pattern ?: $pattern, $value)) {
            $this->addError($model, $attribute, $this->message ?: '请输入正确的金额');
        }
    }
}
