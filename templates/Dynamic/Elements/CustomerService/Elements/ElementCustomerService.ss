<% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>
<% if $Content %><div class="element__content">$Content</div><% end_if %>

<div class="row g-0 element__customer__service">
    <div class="card mb-3">
        <div class="row g-0">
            <% if $FullAddress %>
                <div class="col-lg-8 col-12">
                    $AddressMap(900,300,2)
                </div>
                <div class="card-body col-lg-4 col-12">
            <% else %>
                <div class="card-body col-12">
            <% end_if %>
            <% if $LocationName %><h3 class="card-title">$LocationName</h3><% end_if %>
                <div class="card-text">
                    <% if $FullAddress %>
                        <address>
                            <p>
                                <% if $Address %>$Address<br><% if $Address2 %>$Address2<br><% end_if %><% end_if %>
                                <% if $City %>$City<% end_if %><% if $State %><% if $City %>, <% end_if %>$State<% end_if %><% if $PostalCode %> $PostalCode<% end_if %>
                                <% if $City || $State || $PostalCode %>
                                    <br>
                                <% end_if %>
                                <% if $Country %>$Country.UpperCase<% end_if %>
                            </p>
                        </address>
                    <% end_if %>
                    <% if $Phone || $Email || $Fax || $Website %>
                        <p>
                            <% if $Phone %><a href="tel:{$Phone}" title="Call $Phone">$Phone</a><br><% end_if %>
                            <% if $Email %><a href="mailto:{$Email}" title="Email $Email">$Email</a><br><% end_if %>
                            <% if $Fax %><a href="tel:$Fax" title="Email $Email">$Fax</a><br><% end_if %>
                            <% if $Website %><a href="$Website" target="_blank" title="Go to $Website">$Website</a><% end_if %>
                        </p>
                    <% end_if %>
                </div>
            </div>
        </div>
    </div>
</div>
