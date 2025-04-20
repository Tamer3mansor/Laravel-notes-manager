use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

<?php


// Notes Routes

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::prefix('notes')->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('notes.index');
    Route::get('/create', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/', [NoteController::class, 'store'])->name('notes.store');
    Route::get('/{note}', [NoteController::class, 'show'])->name('notes.show');
    Route::get('/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    Route::put('/{note}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');
});
