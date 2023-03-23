<?php
declare(strict_types=1);

namespace Prova\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsFixture
 */
class TagsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-22 22:35:39',
                'modified' => '2023-03-22 22:35:39',
            ],
        ];
        parent::init();
    }
}
