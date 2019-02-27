<?php

namespace App\Http\Controllers;

use App\Publication;

class IndexController extends Controller
{
    public function index() {
        //\Cache::tags('rubrics')->flush();
        app()->get('DataHelper')->addBannerKeyword('mainpage');
        app()->get('DataHelper')->addBannerKeyword('business');

        $portalTopnews = app()->get('PublicationRepository')->getNewsTopnews(Publication::LIST_TOP_PORTAL);


        return view('main', [
            'bodyClass' => 'home-page',
            'metatags' => $this->getMetaTags(),
            'portalTopnews' => $portalTopnews,
        ]);
    }

    // ToDo move to db
    private function getMetaTags() {
        return [
            'title' => 'Новости - Последние новости Украины сегодня | РБК-Украина',
            'description' => 'Последние новости Украины и мира, политические и аналитические статьи, курсы валют, индексы и котировки, интервью, мнения, бизнес новости и обзоры международных и украинского рынков.',
            'keywords' => 'новости, новости украины, новости дня, последние новости, информационное агентство, рбк, украина, rbc, rbk',
            'og:image' => 'https://www.rbc.ua/static/common/imgs/logo650.jpg',
        ];
    }
}

/*

$this->view->newslineLast = $this->renderBlock(null,null,'_setNewsLastNews', array(Rbc_Default_Publication::FEED_NEWS,120),true, true, 'newsLastNews', true);
$this->render('portal/index/newsline','left',true);
$this->view->dailyTopAuthors = $this->renderBlock(null,null,'_setDailyTopAuthors', array(),true, true, 'dailyTopAuthors', true);
$this->render('portal/index/daily-authors','left',true);

$skip_ids = [];
if (sizeof($this->view->portalTopnews)) {
    foreach ($this->view->portalTopnews as $publication) {
        $skip_ids[] = $publication['publication_id'];
    }
}
$this->render('portal/index/currencies-mobile','topline',true);
$this->render('portal/index/main-topnews','center',true);
$this->render('portal/index/newsline-mobile','center',true);
$this->render('portal/banner/topline-mobile','center',true);
$this->view->dailyTopsForPortal = $this->renderBlock(null,null,'_setNewsTopnews', array(Rbc_Default_Publication::TOP_DAILY_PORTAL),true, true, 'selectedtopNews', true);
$this->render('portal/index/main-daily','center',true);
$this->render('portal/index/main-daily-mobile','center',true);

$this->render('portal/index/currencies','right',true);
$this->render('portal/banner/right-1-index','right',true);
$this->view->companyLastNews = $this->renderBlock(null,null,'_setNewsLastNews', array(105,7),true, true, 'companyLastNews', true);
$this->render('portal/index/companynews','right',true);
$this->view->videoTopnews = $this->renderBlock(null,null,'_setNewsTopnews', array(Rbc_Default_Publication::TOP_VIDEO_PORTAL),true, true, 'selectedtopNews', true);
$this->render('portal/index/videonews','right',true);
$this->view->sportLast = $this->renderBlock(null, null, '_setRubricLast', array($this->view->rubrics['sport']['rubric_id'], 5, $skip_ids), true, true, 'rubricLast', true);
$this->render('portal/index/sports-news','right',true);
$this->render('portal/banner/right-2-index','right',true);

$this->render('portal/index/lite-heading','middle_heading',true);
$this->view->liteTopsForPortal = $this->renderBlock(null,null,'_setNewsTopnews', array(Rbc_Default_Publication::TOP_LITE_PORTAL),true, true, 'selectedtopNews', true);
$this->render('portal/index/lite-top-news','middle_center',true);
$this->render('portal/index/lite-mobile','center',true);
$this->view->liteLastNews = $this->renderBlock(null,null,'_setLiteLastNews', array(Rbc_Default_Publication::FEED_LITE, 16, 'liteLastNews'),true, true, 'liteLastNews', true);
$this->render('portal/index/lite-newsline-left','middle_left',true);
$this->render('portal/index/lite-newsline-right','middle_right',true);

$this->render('portal/index/styler-heading','bottom_heading',true);
$this->view->stylerMainTopnews = $this->renderBlock(null,null,'_setNewsTopnews', array(Rbc_Default_Publication::TOP_STYLER_PORTAL),true, true, 'selectedtopNews', true);
$this->render('portal/index/styler-top-news','bottom_center',true);
$this->render('portal/index/styler-top-news-mobile','bottom_center',true);
$this->render('portal/index/styler-newsline-left','bottom_left',true);
$this->render('portal/index/styler-newsline-right','bottom_right',true);

$this->render('portal/index/mobile-rbc-in-messenger','bottom_footer',true);
$this->view->newsreviewNews = $this->renderBlock(null,null,'_setNewsTopnews', array(Rbc_Default_Publication::TOP_NEWS_OBZOR),true, true, 'selectedtopNews',true);
$this->render('news/main/right-newsukraine','right',true);
*/