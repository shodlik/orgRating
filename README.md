<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced fraymorkda yaratilgan OrgRating tizimi</h1>
    <br>
</p>

O'zbeksiton Respublikasidagi mavjud tadbirkorlik subyektlar to'g'risidagi ochiq malumotlar sinfiga kiriuvchi malumotlarni umumlashtirgan tizimi

Tizimni yana bir muhim ahamiyati mavjud ochiqa malumotlardan foydalangan 
holda iqtsodiy mezon qoidalarini qo'llab harbir korxona tashkiotga qiyosiy ball berish xususiyati mavjud


Batafsizl tanishish uchun  https://docs.google.com/presentation/d/17SYmKKkx2Rs74T7XgURVwhJCLEqKCdHQ0ouR4XZgLd4/edit#slide=id.g1062c8b9129_2_55.
<a href="http://1ms.uz" target="_blank">
        Tizimga o'tish
    </a>
[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
