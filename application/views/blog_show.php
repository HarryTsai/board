<?php
                // iterate result
                foreach ($query->result() as $row)
                {
                        echo $row->blog_title;
                        echo $row->blog_description;
                }

