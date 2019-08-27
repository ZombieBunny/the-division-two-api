<?php

use App\Http\Transformers\BrandSetTransformer;
use App\Http\Transformers\GearTransformer;
use App\Http\Transformers\GearTalentTransformer;
use App\Http\Transformers\GearAttributeTransformer;
use App\Models\Gear;
use App\Models\BrandSet;
use App\Models\GearAttribute;
use App\Models\GearTalent;
use Dingo\Api\Routing\Router;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


$api = app(Router::class);


$api->version('v1', function (Router $api) {
    $api->get('/', function () {
        return 'online';
    });

    $api->post('/gear', function (Request $request) {

        $data = $request->all();

        $data['attributes'] = json_encode($data['attributes']);
        $data['talents'] = json_encode($data['talents']);
        $data['mod_slots'] = json_encode($data['mod_slots']);

        $created = Gear::create($data);

        if ($created) {
            $boom = new GearTransformer();
            $created = $boom->transform($created);
        }

        return response()->json([$created]);
    });

    $api->get('/gear', function (Request $request) {

        $gear = Gear::all();
        $transformer = new GearTransformer();

        $collection = [];
        foreach ($gear as $set) {
            $collection[] = $transformer->transform($set);
        }

        return response()->json($collection);
    });

    $api->get('/sets', function (Request $request) {
        $sets = BrandSet::all();

        $transformer = new BrandSetTransformer();

        $collection = [];
        foreach ($sets as $set) {
            $collection[] = $transformer->transform($set);
        }

        return response()->json($collection);
    });

    $api->get('/gear-talents', function (Request $request) {
        $gear = GearTalent::all();
        $transformer = new GearTalentTransformer();
        $collection = [];
        foreach ($gear as $set) {
            $collection[] = $transformer->transform($set);
        }
        return response()->json($collection);
    });

    $api->get('/gear-attributes', function (Request $request) {
        $gear = GearAttribute::all();
        $transformer = new GearAttributeTransformer();
        $collection = [];
        foreach ($gear as $set) {
            $collection[] = $transformer->transform($set);
        }
        return response()->json($collection);
    });

    $api->post('/gear-attributes', function (Request $request) {

        $data = $request->all();
        $transformer = new GearAttributeTransformer();
        $data['available'] = json_encode($data['available']);

        $created = GearAttribute::create($data);

        if ($created) {
            $created = $transformer->transform($created);
        }

        return response()->json([$created]);
    });

    $api->post('/gear-talents', function (Request $request) {

        $data = $request->all();
        $transformer = new GearTalentTransformer();
        $data['available'] = json_encode($data['available']);

        $created = GearTalent::create($data);

        if ($created) {
            $created = $transformer->transform($created);
        }

        return response()->json([$created]);
    });
});
