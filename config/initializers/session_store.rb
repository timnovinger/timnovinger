# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_timnovinger_session',
  :secret      => '9076ad3f16e8aef7d0767fcce60a96971fb0cd11483cd354ac57d44b4442799a9c4f20812f8a1ec700e9432e4b4bb9e0f23cb7b8d93274c4533aaf54f8478744'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
