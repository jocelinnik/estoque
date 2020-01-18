<?php

Route::get("/", function(){
	return "<h1>Página principal</h1>";
});

Route::get("/outra", function(){
	return "<h1>Outra página em Laravel</h1>";
});

Route::get("/produtos", "ProdutoController@lista");
Route::get("/produtos/mostra/{id}", "ProdutoController@mostra")->where("id", "[0-9]+");
Route::get("/produtos/novo", "ProdutoController@novo");
Route::get("/produtos/adiciona", "ProdutoController@adiciona");

?>