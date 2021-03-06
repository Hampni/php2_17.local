<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;


class Delete extends Controller
{
    protected function access(): bool
    {
        return true;
    }

    public function action()
    {
        $deleteArticle = Article::findById($_GET['id']);
        $deleteArticle->delete();
        header('Location: /AdminPanel/index.php');
    }
}