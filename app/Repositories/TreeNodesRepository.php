<?php

namespace App\Repositories;

use App\TreeNode;

class TreeNodesRepository
{
    public function getTreeStructure() {
        $treeRoot = $this->getTreeRoot();

        $this->loadChildren($treeRoot);

        return $treeRoot;
    }

    /**
     * @param TreeNode $node
     */
    public function loadChildren($node)
    {
        $node->load(['childLeft', 'childRight']);

        if (!is_null($node->childLeft)) {
            $this->loadChildren($node->childLeft);
        }

        if (!is_null($node->childRight)) {
            $this->loadChildren($node->childRight);
        }
    }

    public function getTreeRoot(): ?TreeNode
    {
        return TreeNode::root()->first();
    }
}
