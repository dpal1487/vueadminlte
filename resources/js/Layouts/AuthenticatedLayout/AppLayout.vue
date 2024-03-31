<script setup>
import AppHeader from "@/Layouts/AuthenticatedLayout/AppHeader.vue";
import AppSidebar from "@/Layouts/AuthenticatedLayout/AppSidebar.vue";
import AppLeftSidebar from "@/Layouts/AuthenticatedLayout/AppLeftSidebar.vue";
import AppFooter from "@/Layouts/AuthenticatedLayout/AppFooter.vue";

defineProps({
    title: {
        type: String,
        default: "Home",
    },
});
</script>

<template>
    <div class="wrapper">
        <AppHeader />
        <!-- Main Sidebar Container -->
        <AppSidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-gray-700">{{ title }}</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>

                                <slot name="breadcrumb" />
                            </ol>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <slot name="toolbar" />
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <slot />
                    <!-- /.content -->
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <AppLeftSidebar />
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <AppFooter />
    </div>
</template>
