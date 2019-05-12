<?php

namespace App\Http\Controllers;

use App\Repositories\TreeNodesRepository;

class TreeNodesController extends Controller
{
    /**
     * @var TreeNodesRepository
     */
    protected $treeNodes;

    /**
     * Create a new controller instance.
     *
     * @param  TreeNodesRepository  $treeNodes
     * @return void
     */
    public function __construct(TreeNodesRepository $treeNodes)
    {
        $this->treeNodes = $treeNodes;
    }

    public function index()
    {
        $treeStructure = $this->treeNodes->getTreeStructure();

        return view('binary_tree', compact('treeStructure'));
    }
}
