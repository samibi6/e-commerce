<?php

use App\Models\Article;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Seller;
use Pest\TestSuite\TestCase;

it('can get articles by category', function () {
    $result = Article::getArticlesByCat('Electronics');
    expect($result->pluck('id')->toArray())->toEqual([1, 11, 21, 31]);
});

it('can get article by name', function () {
    $result = Article::getArticleByName('Apple Watch');
    expect($result->id)->toEqual(31);
});

it('can get article below a certain price', function () {
    $result = Article::getArticlesBelow(20);
    expect($result->pluck('id')->toArray())->toEqual([9, 18, 29]);
});

it('can show specific order details from customer', function () {
    $result = Order::getOrderDetails(1);
    expect($result->pluck('id')->toArray())->toEqual([1, 2, 3, 4, 5]);
});

it('can return total sales amount from seller', function () {
    $result = Seller::getTotalSalesAmountFromSeller(1);
    expect($result)->toEqual(43099.24);
});

it('can return total number of sales from seller', function () {
    $result = Seller::getTotalSalesFromSeller(1);
    expect($result)->toEqual(76);
});

it('can return customers that has spent over a certain amount', function () {
    $result = Customer::getCustomersFromExpenses(2000);
    // expect($result->pluck('id')->toArray())->toEqual([1]);
});
