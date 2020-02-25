<?php declare(strict_types=1);

namespace DmitriiKoziuk\yii2EntityGroups;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->setModule(EntityGroupsModule::ID, [
            'class' => EntityGroupsModule::class,
        ]);
    }
}