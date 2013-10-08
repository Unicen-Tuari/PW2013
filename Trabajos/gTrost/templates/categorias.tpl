<nav class="navbar navbar-default f_navbar_menu" role="navigation">
    <div>
      <ul class="nav navbar-nav">
        {foreach from=$subcategorias key=categoria item=subcat}
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$categoria}<b class="caret"></b></a>
            <ul class="dropdown-menu">
              
                {foreach from=$subcat item=data}
                  <li><a href="/productos/search/{$data.subcat_nombre}">{$data.subcat_nombre}</a></li>
                {/foreach}
                
              
            </ul>
          </li>
        
        
        {/foreach}
      </ul>
    </div>
  </nav>