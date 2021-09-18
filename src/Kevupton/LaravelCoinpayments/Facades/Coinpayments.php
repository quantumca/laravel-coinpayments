<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/09/2017
 * Time: 1:14 PM
 */

namespace Kevupton\LaravelCoinpayments\Facades;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Kevupton\LaravelCoinpayments\Models\Ipn;
use Kevupton\LaravelCoinpayments\Providers\LaravelCoinpaymentsServiceProvider;

/**
 * @method static Transaction createTransactionSimple($amount, $currencyIn, $currencyOut, $additional = [])
 * @method static Transaction createTransaction($req)
 * @method static Transfer createTransfer($amount, $currency, $merchant, $autoConfirm = false)
 * @method static Withdrawal createWithdrawal($amount, $currency, $address, $autoConfirm = false, $ipnUrl = '')
 * @method static Ipn validateIPNRequest(Request $request)
 */
class Coinpayments extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return LaravelCoinpaymentsServiceProvider::SINGLETON; }
}
