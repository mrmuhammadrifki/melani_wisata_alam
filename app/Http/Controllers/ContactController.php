<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::all();  
        return view('kontak', compact('contacts'));  
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:1000',
        ]);

        
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        
        return redirect()->back()->with('status', 'Kontak berhasil ditambahkan!');
    }

    
    public function edit($id)
    {
        
        $contact = Contact::findOrFail($id);
        return response()->json($contact);  
    }

    

    public function update(Request $request, $id)
{
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'message' => 'required|string|max:1000',
    ]);

    
    $contact = Contact::findOrFail($id);
    
    
    $contact->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message,
    ]);

    
    return redirect()->route('kontak.index')->with('status', 'Kontak berhasil diperbarui!');
}

public function destroy($id)
{
    
    $contact = Contact::findOrFail($id);
    
    
    $contact->delete();

    
    return redirect()->route('kontak.index')->with('status', 'Kontak berhasil dihapus!');
}


}