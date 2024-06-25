<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function rule1(Request $request)
    {
        $items = $request->input('items');
        rsort($items);
        $discounted = [];
        $payable = [];

        while (count($items) > 1) {
            $first = array_shift($items);
            $payable[] = $first;

            foreach ($items as $key => $item) {
                if ($item <= $first) {
                    $discounted[] = $item;
                    unset($items[$key]);
                    break;
                }
            }

            $items = array_values($items);
        }

        if (count($items) > 0) {
            $payable[] = array_shift($items);
        }

        return response()->json([
            'discounted_items' => $discounted,
            'payable_items' => $payable,
        ]);
    }

    public function rule2(Request $request)
    {
        $items = $request->input('items');
        rsort($items);
        $discounted = [];
        $payable = [];

        while (count($items) > 1) {
            $first = array_shift($items);
            $payable[] = $first;

            foreach ($items as $key => $item) {
                if ($item < $first) {
                    $discounted[] = $item;
                    unset($items[$key]);
                    break;
                }
            }

            $items = array_values($items);
        }

        if (count($items) > 0) {
            $payable[] = array_shift($items);
        }

        return response()->json([
            'discounted_items' => $discounted,
            'payable_items' => $payable,
        ]);
    }

    public function rule3(Request $request)
    {
        $items = $request->input('items');
        rsort($items);
        $discounted = [];
        $payable = [];

        while (count($items) >= 4) {
            $first = array_shift($items);
            $second = array_shift($items);
            $payable[] = $first;
            $payable[] = $second;

            $free_items = [];
            foreach ($items as $key => $item) {
                if ($item < $first && count($free_items) < 2) {
                    $free_items[] = $item;
                    unset($items[$key]);
                }
                if (count($free_items) == 2) {
                    break;
                }
            }

            $discounted = array_merge($discounted, $free_items);
            $items = array_values($items);
        }

        foreach ($items as $item) {
            $payable[] = $item;
        }

        return response()->json([
            'discounted_items' => $discounted,
            'payable_items' => $payable,
        ]);
    }
}
