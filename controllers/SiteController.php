<?php

namespace app\controllers;

use Exception;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return Response
     * @throws Exception
     */
    public function actionSend(): Response
    {
        if (!Yii::$app->request->isPost) {
            throw new \Exception('only post request accepted');
        }
        $formData = Yii::$app->request->post();
        unset($formData['_csrf']);
        $fileName = Yii::getAlias('@runtime/data.json');

        if (!file_exists($fileName)) {
            file_put_contents($fileName, json_encode([$formData]));
        } else {
            $fileContent = file_get_contents($fileName);
            $fileRows = json_decode($fileContent, true);
            if (!is_array($fileRows)) {
                throw new \Exception('invalid json');
            }
            $fileRows[] = $formData;
            file_put_contents($fileName, json_encode($fileRows));
        }

        return $this->asJson(['status' => 'ok']);
    }
}
