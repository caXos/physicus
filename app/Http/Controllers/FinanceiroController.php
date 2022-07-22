<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Financeiro;

class FinanceiroController extends Controller
{
    //Index -> mostra todos os registros de financeiro
    // @param -> nenhum
    // return: array de objetos JSON dos lançamentos financeiros
    public function index()
    {
        $lancamentos = Financeiro::all()->toArray();

        $soma = 0;
        for ($contador = 0; $contador < sizeof($lancamentos); $contador++) {
            number_format($lancamentos[$contador]['value'], 2, ',', '.');
            if ($lancamentos[$contador]['type'] == 1) $soma += $lancamentos[$contador]['value'];
            else if ($lancamentos[$contador]['type'] == 2) $soma -= $lancamentos[$contador]['value'];
        }
        return Inertia::render('Financeiro', ['lancamentos' => $lancamentos, 'soma' => $soma]);
    }
}