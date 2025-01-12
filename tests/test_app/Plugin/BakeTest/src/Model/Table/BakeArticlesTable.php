<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         1.0.6
 * @license       https://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace BakeTest\Model\Table;

use Cake\ORM\Table;

/**
 * Class BakeArticle
 */
class BakeArticlesTable extends Table
{
    /**
     * @param array $config
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->belongsTo('BakeUsers');
        $this->hasMany('BakeComments');
        $this->belongsToMany('BakeTags');
    }
}
