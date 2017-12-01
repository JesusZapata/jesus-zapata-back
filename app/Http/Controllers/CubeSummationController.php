<?php
/**
 * CubeSummationController.php
 * 
 * PHP Version 7.1
 * 
 * @category Controller
 * 
 * @package App
 * 
 * @author Jesus Zapata <chuchocorleone@gmail.com>
 * 
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 * @link README.md
 */
namespace App\Http\Controllers;

use Storage;
use App\Http\Requests\CubeSummationRequest;
use App\CubeSummation;

/**
 * Controller related with CubeSummation
 * 
 * PHP Version 7.1
 * 
 * @category Controller
 * 
 * @package App
 * 
 * @author Jesus Zapata <chuchocorleone@gmail.com>
 * 
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 * @link README.md
 */
class CubeSummationController extends Controller
{

    /**
     * Method to upload the file cube_summation
     * 
     * @param CubeSummation $cube The CubeSummation to provide the method process
     * 
     * @param CubeSummationRequest $request Request related with CubeSummation
     * 
     * @author Jesus Zapata <chuchocorleone@gmail.com>
     * @return \Illuminate\Http\Response
     */
    public function upload(CubeSummation $cube, CubeSummationRequest $request)
    {
        $path = $request->file('cube_summation')->store('cube_summation');
        $data = explode("\n", Storage::get($path));
        
        return view(
            'cube_sumation.upload',
            ['data' => $data, 'results' => $cube->process($data)]
        );
    }
}
