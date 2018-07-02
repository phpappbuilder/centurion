<?php
namespace App\my\example;

use App\phpappbuilder\router\Router;
use App\phpappbuilder\controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use App\phpappbuilder\template\Template;
use App\phpappbuilder\admin\Template as AdminTemplate;

class TestController extends Controller
{
    public function pt()
        {
           // print_r('hello');
            $template = new Template( AdminTemplate::class );

            //print_r($template->render('component/header'));

            $this->response->setContent($template
                ->render('index', [
                    'title' => 'Centurion app',
                    'sidebar'=>$template->render('component/sidebar' , [
                        'section' => $template->render('component/sidebar/section', [
                            'section' => [[
                                'name' => 'Раздел разработки',
                                'collection' => [
                                    $template->render('component/sidebar/item', [
                                        'fa_icon'=>'fa fa-laptop',
                                        'name'=>'TEst item!',
                                        'href'=>'/admin',
                                        'badges'=>[
                                            ['color'=>'green' , 'value'=>'yes!']
                                        ]
                                    ])
                                ]
                            ],
                                [
                                    'name' => 'Раздел разработки',
                                    'collection' => [
                                        $template->render('component/sidebar/item', [
                                            'fa_icon'=>'fa fa-laptop',
                                            'name'=>'TEst item!',
                                            'href'=>'/admin',
                                            'badges'=>[
                                                ['color'=>'green' , 'value'=>'yes!']
                                            ],
                                            'child'=>[
                                                $template->render('component/sidebar/item', [
                                                    'fa_icon'=>'fa fa-laptop',
                                                    'name'=>'TEst item!',
                                                    'href'=>'/admin',
                                                    'badges'=>[
                                                        ['color'=>'green' , 'value'=>'yes!']
                                                    ],
                                                    'child'=>[
                                                        $template->render('component/sidebar/item', [
                                                            'fa_icon'=>'fa fa-laptop',
                                                            'name'=>'TEst item!',
                                                            'href'=>'/admin',
                                                            'badges'=>[
                                                                ['color'=>'green' , 'value'=>'yes!']
                                                            ]
                                                            ])
                                                    ]
                                                ])
                                            ]
                                        ])
                                    ]
                                ]
                            ]
                        ])
                    ]),
                    'header' => $template->render('component/header', [
                        'auth'=>$template->render('component/header/auth'),
                        'LogoSmall'=>'<b>app</b>',
                        'LogoBig'=>'<b>Centurion</b>App',
                        'dropdown'=>[['fa_icon'=>'fa fa-cloud-download', 'label'=>'new!' , 'label_type'=>'warning' , 'header'=>'hello world', 'content'=>'<a href="/admin">Click this</a>' , 'footer'=> '<a href="#">See All Messages</a>']]
                    ])
            ]));
            //$this->response->setContent('<html><body><h1>Hello world.'.$this->arg['trans'].'</h1><a href="'.Router::url($this->route , ['trans'=>'sergey']).'">this route - '.$this->route.'</a></body></html>'.);
            $this->response->setStatusCode(Response::HTTP_OK);
            $this->response->headers->set('Content-Type', 'text/html');
            $this->response->send();

        }
}