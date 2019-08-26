<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Forum App
An web based app that lets you create todos list.

## What this app is about
* Login, Register functionality.
* You could create your own categories. Update it. Delete it.
* Create your own posts with description, content, time and date. This post could be related to certain category and tags.
* Lets you create your own tags. Update it. Delete it.
* Update your profile. Make others admin.

## Author
* **Utsav Dave**

## Technologies Used
* [Php Storm](https://www.jetbrains.com/phpstorm/)

## Installation
* Just clone or download the repo. Open it inside PhpStorm.
* Open terminal, cd inside the project directory and start artisan serve.

## Screenshots
* First the user needs to Login or Register in order to use the application. The user can do so by creating new account with **Register** button on top right or could just login with credentials.
![login](https://github.com/utsavDave97/Blog/blob/master/screenshots/login.png)

* The home page of the app has many options on the left nav bar which includes Tags, Posts, Categories, Users and Trashed Posts. Also, the user has option to **update profile** which is shown on top right corner
![home](https://github.com/utsavDave97/Blog/blob/master/screenshots/home.png)

* First lets start by creating a Category. Just clicking on Categories on the left nav bar would take you to that page. Than click **Add Category** button and a category would be created.
![addCategory](https://github.com/utsavDave97/Blog/blob/master/screenshots/createCategory.gif)

* After creating category, you could also **update** or **delete** category by clicking either edit or delete button.
![updateCategory](https://github.com/utsavDave97/Blog/blob/master/screenshots/updateDeleteCategory.gif)

* After creating category, you could create different posts related to that category you created earlier. If there is no category created, than the post could not be created.
![addPost](https://github.com/utsavDave97/Blog/blob/master/screenshots/addPost.gif)

```diff
-here one thing to notice is that, the app being on secure server the image were stored but the image 
-were displayed using storage link path which was not created due to server security. Otherwise, 
-the image could be stored for particular post and displayed here

-Due to this fact, the edit option on Post doesn't work.
```

* For a post to be related to certain tags, you could also Create, update or delete tags.
![createTag](https://github.com/utsavDave97/Blog/blob/master/screenshots/createUpdateDeleteTag.gif)

* If you want to delete a Post, you could just click **Trash** button and it would be temporarily. If you want to delete a Post permanently, than click on **Trashed Posts** on left nav bar and you could delete it there.
![postdelete](https://github.com/utsavDave97/Blog/blob/master/screenshots/postTrashDelete.gif)

* Lastly, you could update your profile and add an about section too. Also, you could see other users if you are an **admin**.

![updateProfile](https://github.com/utsavDave97/Blog/blob/master/screenshots/updateProfile.gif)

## License
```
MIT License

Copyright (c) 2019 Utsav Dave

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
