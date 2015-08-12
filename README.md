Drupal KMaps Facet Module
=============================

A Drupal block module that provides a customizable number of blocks to navigate subject and places in relation to a specific resource type.

Developed for Shanti at UVa (http://shanti.virginia.edu)

Based on Kmaps Navigator written by Yuji Shinozaki (ys2n@virginia.edu) 

Written by Than Grove (ndg8f@virginia.edu)

This module creates a variable number of blocks. Each block displays either a place or subject tree from a customizable starting point
where each node of the tree shows the number of a specific type of resource tagged with that kmap. In the block configuration, you choose
the type (places/subjects), the root node, and the type of resource to display counts for (e.g. A/V, texts, etc.). The block then dispalys
that portion of the tree with numbers indicating the number of resources (nodes) of chosen type tagged with that kmap.

Blocks are can be placed in any region, however they were primarily intended for the Shanti Sarvaka theme Search Flyout. 
They can be displayed as individual tabs with some modification to the subtheme. To implement this 
see Mediabase's Sarvaka Mediabase theme, especially the sarvaka_mediabase_preprocess_region() function in the template.php file
