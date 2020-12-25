<template>

    <footer class="b-footer">
        <div class="container d-flex flex-wrap">
            <nav class="b-footer_navigation">
                <ul>
                    <li><a href="/home">Home</a>
                    </li>
                    <li><a href="objects_category.html">Category</a>
                    </li>
                    <li><a>Elements</a>
                    </li>
                    <li><a href="blog.html">Blog</a>
                    </li>
                    <li><a href="pages_about.html">About</a>
                    </li>
                    <li><a href="pages_contacts.html">Contacts</a>
                    </li>
                </ul>
            </nav>
            <div class="b-footer_social-list">
                <ul>
                    <li><a href=""><i class="fab fa-facebook" title="Facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-flickr" title="Flickr"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter" title="Twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-pinterest" title="Pinterest"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row"></div>
        </div>
    </footer>

</template>

<script>
    export default {
        mounted() {
            console.log('Footer Component is mounted.')
        }
    }
</script>
