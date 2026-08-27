<?php
/*"""Loads a TensorFlow plugin, containing custom ops and kernels.

Pass "Library_filename" to a platform-specific mechanism for dynamically 
loading a library. The rules for determining the exact location of the library are platform-specific
and are not documented here. When the library is loaded, ops and kernels registered in the library 
via the 'REGISTER_*' macros are made available in the TensorFlow process. Note that ops with the same
name as an existing op are rejected and not registered with the same process.

Args:
    Library_filename: Path to the plugin.
      Relative or absolute filesystem path to a dynamic library file.

Returns:
    A phyton module containing the Pyhton wrappers for Ops defined in the Plugin

Raises:
    RuntimeError: when unstable to load the library or get the python wrappers.
"""      */  
?>