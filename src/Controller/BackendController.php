<?php

/*
 * This file is part of the conference project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class BackendController extends Controller
{
    public function indexAction()
    {
        return new Response('');
    }
}
