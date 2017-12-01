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
     * @param CubeSummationRequest $request Request related with CubeSummation
     * 
     * @author Jesus Zapata <chuchocorleone@gmail.com>
     * @return \Illuminate\Http\Response
     */
    public function upload(CubeSummationRequest $request)
    {
        $path = $request->file('cube_summation')->store('cube_summation');
        $data = $all_data = explode("\n", Storage::get($path));
        $results = [];
        
        //  TODO Validated the data
        $cases = $data[0];
        $data = array_splice($data, 1);
        $index = 0;
        
        for ($i = 1; $i <= $cases; $i++) {
            $array = [];
            list($dimension, $querys) = explode(' ', $data[$index]);

            for ($j = 1; $j <= $dimension; $j++) {
                for ($k = 1; $k <= $dimension; $k++) {
                    for ($l = 1; $l <= $dimension; $l++) {
                        $array[$j][$k][$l] = 0;
                    }
                }
            }

            for ($j = 1; $j <= $querys; $j++) {
                $operation = explode(' ', $data[$index + $j]);
                switch ($operation[0]) {
                case 'UPDATE':
                    //  UPDATE x y z W
                    $operation = array_splice($operation, 1);
                    list($x, $y, $z, $W) = $operation;
                    $array[$x][$y][$z] = $W;
                    //echo "<p>$W</p>";
                    break;
                
                case 'QUERY':
                    // QUERY  x1 y1 z1 x2 y2 z2 
                    $operation = array_splice($operation, 1);
                    list($x1, $y1, $z1, $x2, $y2, $z2) = $operation;

                    $sum = 0;
                    for ($k = 1; $k <= $dimension; $k++) {
                        for ($l = 1; $l <= $dimension; $l++) {
                            for ($n = 1; $n <= $dimension; $n++) {
                                $sum+= $array[$k][$l][$n];
                            }
                        }
                    }

                    $results[] = $sum;
                    break;
                }
            }
            $index = 1 + $querys;
        }
    }
}
