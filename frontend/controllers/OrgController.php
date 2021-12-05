<?php

namespace frontend\controllers;

use common\components\services\MySoliqUz;
use common\models\LegalEntitiesReester;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class OrgController extends Controller
{

    public function actionList($key=null)
    {
        $query = LegalEntitiesReester::find();
        if($key!=null){
            $query->orFilterWhere(['like', 'tin', $key])
                ->orFilterWhere(['like', 'name', $key]);
        }
        $model = $query->limit(30)->all();
        return $this->renderPartial('list',['model'=>$model]);
    }

    public function actionView($tin){
        $model = LegalEntitiesReester::findOne(['tin'=>$tin]);
        return $this->render('view',['model'=>$model]);
    }

    public function actionGetProducts($tin){
        $model = MySoliqUz::getProductList($tin);
        return $this->renderPartial('_product_list',['model'=>$model]);
    }


}
