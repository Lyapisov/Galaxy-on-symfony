<?php

namespace App\Form;

use App\Entity\News;
use App\Repository\NewsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    /**
     * @var NewsRepository
     */
    private $newsRepos;

    /**
     * NewsType constructor.
     * @param NewsRepository $news
     */
    public function __construct(NewsRepository $newsRepos)
    {
        $this->newsRepos = $newsRepos;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $allNews = $this->newsRepos->getNews();
        foreach ($allNews as $news){

        }
        $builder
            ->add('name')
            ->add('category')
            ->add('content')
            ->add('photo')
            ->add('date')
            ->add('author')
            ->add('visibility')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
