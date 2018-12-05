from django.contrib.auth.decorators import login_required
from django.shortcuts import render,  get_object_or_404
from django.urls import reverse
from django.shortcuts import HttpResponseRedirect
from Airpass.models import readers
from django.contrib import messages

@login_required(login_url='/')
def reader(request):
    r = readers.objects.all()
    context = {
        "object": r
    }
    return render(request, "reader.html", context)

@login_required(login_url='/')
def anr(request):
    context={}
    return render(request, "add_new_r.html", context)

@login_required(login_url='/')
def delete_r_v(request, id):
    dr = get_object_or_404(readers, id=id)
    # r = dr.reader_id
    context = {
        "object": id
    }
    return render(request, "delete_reader_view.html", context)

@login_required(login_url='/')
def update_r_v(request, id):
    dr = readers.objects.get(id=id)
    context = {
        "object": dr
    }
    return render(request, "update_reader.html", context)

@login_required(login_url='/')
def store_new_reader(request):

    if request.method == 'POST':
        r = readers()
        r.r_name = request.POST.get('r_name')
        r.mac_add = request.POST.get('mac_add')
        r.save()
        read = readers.objects.all()
        context = {
            "object": read
        }
        return render(request, 'reader.html', context)
    else:
        return render(request,'add_new_r.html')

@login_required(login_url='/')
def delete_reader(request, id):
    dr = get_object_or_404(readers, id=id)
    if request.method == "POST":
        dr.delete()
        messages.success(request, "Post successfully deleted!")
        return HttpResponseRedirect("/apts_main/reader")
    read = readers.objects.all()
    context = {
        "object": read
    }
    return render(request, 'reader.html', context)

@login_required(login_url='/')
def update_reader(request, id):
    ur = get_object_or_404(readers, id=id)
    if request.method == "POST":
        ur.r_name = request.POST.get('r_name')
        ur.mac_add = request.POST.get('mac_add')
        ur.save()
        # messages.success(request, "Post successfully deleted!")
        return HttpResponseRedirect("/apts_main/reader")
    read = readers.objects.all()
    context = {
        "object": read
    }
    return render(request, 'reader.html', context)
