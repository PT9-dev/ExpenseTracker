<?php

namespace App\Http\Resources;

use App\Models\ExpenseCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $category = ExpenseCategory::find($this->category);
        $expenseCategory = new ExpenseCategoryResource($category);
          return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description'=>$this->description,
            'category' => $expenseCategory,
        ];
    }
}
