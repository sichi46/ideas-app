    <?php

    use App\Http\Controllers\DashboardController;
    use Illuminate\Support\Facades\Route;

    // Pages to create 

    //  / or home

    // feed

    // profile

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/terms', function () {
        return view('terms');
    });
