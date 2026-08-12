<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\RegionRepository;
use Illuminate\Http\JsonResponse;

class RegionController extends Controller
{
    private RegionRepository $regionRepository;

    /**
     * constructor method
     *
     * @return void
     */
    public function __construct()
    {
        $this->regionRepository = new RegionRepository;
    }

    /**
     * getProvinces
     *
     * @return JsonResponse
     */
    public function getProvinces()
    {
        $data = $this->regionRepository->getProvinces();

        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * getCities
     *
     * @param  mixed  $provinceId
     * @return JsonResponse
     */
    public function getCities($provinceId)
    {
        $data = $this->regionRepository->getCities($provinceId);

        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * getDistricts
     *
     * @param  mixed  $cityId
     * @return JsonResponse
     */
    public function getDistricts($cityId)
    {
        $data = $this->regionRepository->getDistricts($cityId);

        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * getVillages
     *
     * @param  mixed  $districtId
     * @return JsonResponse
     */
    public function getVillages($districtId)
    {
        $data = $this->regionRepository->getVillages($districtId);

        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }
}
