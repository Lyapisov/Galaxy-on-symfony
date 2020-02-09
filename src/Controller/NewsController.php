<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @var NewsRepository
     */
    private $news;

    /**
     * NewsController constructor.
     * @param NewsRepository $news
     */
    public function __construct(NewsRepository $news)
    {
        $this->news = $news;
    }

    /**
     * @Route("/", name="news")
     */
    public function index()
    {
        $allNews = $this->news->getNews();

        return $this->render('news/index.html.twig', [
            'controller_name' => 'NewsController',
            'allNews' => $allNews,
        ]);
    }
}
