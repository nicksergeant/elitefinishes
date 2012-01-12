require 'rubygems'
require 'rack/contrib'
require 'rack-rewrite'

use Rack::Static, :urls => ['/images'], :root => "public"
use Rack::ETag
use Rack::Rewrite do
  rewrite '/', '/index.html'
  rewrite '/contact/', '/contact.html'
  rewrite '/services/', '/services.html'
  rewrite '/services/10-things-to-ask-your-pavement-maintenance-contractor.php', '/services/10-things-to-ask-your-pavement-maintenance-contractor.html'
  rewrite '/services/asphalt_repair.php', '/services/asphalt_repair.html'
  rewrite '/services/catch_basin_repair.php', '/services/catch_basin_repair.html'
  rewrite '/services/crack_filling.php', '/services/crack_filling.html'
  rewrite '/services/seal_coating.php', '/services/seal_coating.html'
  rewrite '/services/traffic_calming.php', '/services/traffic_calming.html'
  rewrite '/photo_gallery/', '/photo_gallery.html'
end
run Rack::Directory.new('public')
