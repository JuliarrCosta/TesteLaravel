<?php

namespace App\Http\Controllers;

//Controlar requisições http
use Illuminate\Http\Request;
//importando o Model para interação
use App\Models\Product;
//Validação de dados
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    //F
    //Retornar tudo em json, um GET
    public function index(){
        return response()->json(Product::all(),200);
    }

    //Recebe uma request do tipo POST e retorna os dados criados
    public function store(Request $request){
        //Validando a tipagem de dados requerida
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:100',
            'product_price' => 'required|numeric',
            'product_quantity'=> 'required|integer',
            'product_description' => 'nullable|string|max:200'
        ]);

        if($validator->fails()){
            //se os dados não estiverem de acordo
            return response()->json($validator->errors(), 422);
        }

        //cria uma objeto na tabela
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    //Requisição do tipo PUT
    public function update(Request $request, $id){
        
        //Validando a entrada (Poderia ser criado um método para reciclar esse código)
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:100',
            'product_price' => 'required|numeric',
            'product_quantity'=> 'required|integer',
            'product_description' => 'nullable|string|max:200'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        //Busca o produto por id, o mais ideal seria pelo código, por segurança e também se fosse uma industria o varejo poderia utilizar o GET da API
        //Porém esse banco é do trabalho passado e não colocamos a coluna code 
        $product=Product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produto não cadastrado.']);
        }

        $product->update($request->all());
        return response()->json($product, 200);

    }
    //Buscar por id, seria mais realista se fosse por code
    public function show($id){
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produto não foi encontrado!']);
        }

        return response()->json($product, 200);
    }

    //Método para requisição DELETE
    public function destroy($id){
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produto não foi encontrado!']);
        }
        $product->delete();

        return response()->json(['message' => 'Produto deletado']);

    }

    
}
