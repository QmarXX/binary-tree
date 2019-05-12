<?php

use App\TreeNode;
use Illuminate\Database\Seeder;

class TreeNodesTableSeeder extends Seeder
{
    const MAX_TREE_HEIGHT = 5;
    const GENERATE_CHILD_PROBABILITY = 8;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TreeNode::query()->delete();

        $rootNode = factory(TreeNode::class)->make();

        $rootNode->is_root = true;

        $rootNode->save();

        $this->createChildren($rootNode);
    }

    protected function createChildren(TreeNode $node, $level = 0)
    {
        $leftNode = (rand(0, 10) <= static::GENERATE_CHILD_PROBABILITY) ? factory(TreeNode::class)->create() : null;

        $rightNode = (rand(0, 10) <= static::GENERATE_CHILD_PROBABILITY) ? factory(TreeNode::class)->create() : null;

        if (!is_null($leftNode)) {
            $node->childLeft()->associate($leftNode);
        }

        if (!is_null($rightNode)) {
            $node->childRight()->associate($rightNode);
        }

        $node->save();

        ++$level;

        if (!is_null($leftNode) && $level <= static::MAX_TREE_HEIGHT) {
            $this->createChildren($leftNode, $level);
        }

        if (!is_null($rightNode) && $level <= static::MAX_TREE_HEIGHT) {
            $this->createChildren($rightNode, $level);
        }
    }
}
