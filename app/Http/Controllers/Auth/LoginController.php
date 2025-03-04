protected function authenticated(Request $request, $user)
{
    if ($user->isAdmin()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('home');
}
