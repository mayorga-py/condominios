use App\Http\Controllers\QuejaController;

Route::post('/quejas', [QuejaController::class, 'store']);   // Crear queja
Route::get('/quejas', [QuejaController::class, 'index']);    // Listar todas
Route::put('/quejas/{id}', [QuejaController::class, 'update']); // Actualizar estado
