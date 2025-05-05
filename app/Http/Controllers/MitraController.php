<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Mitra;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    // // protected $client;

    // public function __construct(Client $client)
    // {
    //     $this->client = $client;
    // }

     public function index()
     {

        $mitras = Mitra::all();
        return view('admin.CRUDMitra', compact('mitras'));

        // try {
        //     $response = $this->client->get('http://localhost:3001/api/refresh-mitra', [
        //         'verify' => false, 
        //     ]);
    
        //     $mitraData = json_decode($response->getBody()->getContents(), true);
    
            
        //     if (isset($mitraData['mitra'])) {
        //         return view('admin.CRUDMitra', ['mitraData' => $mitraData['mitra']]);
        //     } else {
        //         return view('admin.CRUDMitra', ['mitraData' => []]);
        //     }
    
        // } catch (\Exception $e) {
        //     return response()->json(['error' => 'Unable to fetch data from the API', 'message' => $e->getMessage()], 500);
        // }
    }
    
    // public function tentang()
    // {
    //     $obats = Obat::all();

    //     return view('main.tentangObat', $obats );
    // }

    public function getAllData()
    {
        try {
            // Fetch all Mitra data from the database
            $mitraData = Mitra::all();

            // Return the view with the mitra data
            return view('main.mitraKami', ['mitraData' => $mitraData]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to fetch Mitra data', 'message' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaMitra' => 'required|string|max:255',
            'sejak' => 'required|string|max:255',
            'link' => 'nullable|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filePath = $file->store('uploads/mitra', 'public');
            $validatedData['logo'] = $filePath;
        }

        Mitra::create($validatedData);

        return redirect()->back()->with('success', 'Mitra added successfully!');
    }

    public function refreshMitra()
    {
        try {
            $response = $this->client->get('http://localhost:3001/api/refresh-mitra', [
                'verify' => false, 
            ]);

            $mitraData = json_decode($response->getBody()->getContents(), true);

            return response()->json($mitraData);
        } catch (\Exception $e) {
          
            \Log::error('Error fetching Mitra data: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to fetch data from the API', 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
{
    try {
        $validated = $request->validate([
            'namaMitra' => 'required|string|max:255',
            'sejak' => 'required|string|max:255',
            'link' => 'required|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $mitra = Mitra::findOrFail($id);

        if ($request->hasFile('logo')) {
            if ($mitra->logo && Storage::disk('public')->exists($mitra->logo)) {
                Storage::disk('public')->delete($mitra->logo);
            }

            $logoPath = $request->file('logo')->store('uploads', 'public');
            $mitra->logo = $logoPath;
        }

        $mitra->nama = $validated['namaMitra'];
        $mitra->sejak = $validated['sejak'];
        $mitra->link = $validated['link'];
        $mitra->save();

        return response()->json([
            'message' => 'Mitra updated successfully!',
            'mitraId' => $mitra->id,
        ]);
    } catch (\Exception $e) {
        \Log::error('Error updating Mitra: ' . $e->getMessage());

        return response()->json([
            'error' => 'An error occurred while updating Mitra.',
            'message' => $e->getMessage(),
        ], 500);
    }
}

    public function destroy($id)
    {
        try {
            $mitra = Mitra::findOrFail($id);

            if ($mitra->logo && Storage::disk('public')->exists($mitra->logo)) {
                Storage::disk('public')->delete($mitra->img_src);
            }
            $mitra->delete();

            return response()->json([
                'message' => 'Mitra deleted successfully!',
            ]);
        } catch (\Exception $e) {
            \Log::error('Error deleting Mitra: ' . $e->getMessage());

            return response()->json([
                'error' => 'An error occurred while deleting Mitra.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
