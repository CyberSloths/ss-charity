<% if $SearchResult.Matches %>
   <h2>Results for &quot;{$Query}&quot;</h2>
   <p>Displaying Page $SearchResult.Matches.CurrentPage of $SearchResult.Matches.TotalPages</p>
   <ol>
       <% loop $SearchResult.Matches %>
           <li>
               <h3><a href="$Link">$Title</a></h3>
               <p><% if $Abstract %>$Abstract.XML<% else %>$Content.ContextSummary<% end_if %></p>
           </li>
       <% end_loop %>
   </ol>
<% else %>
   <p>Sorry, your search query did not return any results.</p>
<% end_if %>
