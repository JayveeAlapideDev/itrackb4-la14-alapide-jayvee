
QUESTIONS

J1
A resource controller's `index()` fetches a list of records from the database ( `Product::with('brand')`) and passes them to the view, while my HomeController only returns a page. It also reads the query string (search, filters, sort, page number) and applies those values to the query, which my HomeController never has to do.

J2
Before I added `withQueryString()`, the pagination links only contained `?page=2`, so the search term was dropped from the URL. The controller therefore received only the page number with no `search` value, and it showed page 2 of the unfiltered list instead of page 2 of the search results.

J3
A misspelled sort value is worse than an error because it fails silently: SQLite treats the unknown name as plain text, the page still loads, and the list comes back in no particular order, so nobody notices or reports it. On a different database the same URL would crash the page. My allowed list (`['name', 'package']`) means only known columns ever reach `orderBy()`, and anything else falls back to `name`, so the list is always sorted
